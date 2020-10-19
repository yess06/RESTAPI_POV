<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        return response()->json([
            'message' => 'User created'
        ], 201);
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean',
        ]);
        $credentials = request(['email', 'password']);
            if(!Auth::attempt($credentials)){
                return response()->json(['message' => 'Unauthorized'], 401);
            }
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            if($request->remember_me){
                $token->expires_at = Carbon::now()->addWeeks(1);
            }
            $token->save();
            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            ]);
    }
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'logged out'
        ]);
    }
    public function user(Request $request){
        return response()->json([
            'user' => $request->user(),
        ]);
    }
    public function users(Request $request){
        $users = User::all();
        return response()->json([
            'users' => $users,
        ]);
    }
    public function updateuser(Request $request, $id){
        $this->validate($request, ['name' => 'required',
        'email' => 'required|string|email',]);
        $user = User::findOrFail($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return response()->json(['message' => 'User Updated']);
    }
    public function updatepass(Request $request, $id){
        $request->validate([
            'password' => 'required|string|confirmed',
        ]);
        $user = User::findOrFail($id);
        $user->password = bcrypt($request['password']);
        $user->save();
        return response()->json(['message' => 'Password updated']);
    }

    public function deleteuser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }
}
