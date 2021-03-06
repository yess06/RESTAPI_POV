<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Lesson1Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'auth'], function(){
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signup']);
    Route::post('signup_teacher', [AuthController::class, 'signup_teacher']);
    Route::get('users', [AuthController::class, 'users']);
    Route::get('roles', [AuthController::class, 'roles']);
    Route::post('add_lesson', [Lesson1Controller::class, 'add_lesson']);
    Route::post('add_time', [Lesson1Controller::class, 'add_time']);
    Route::post('add_activity', [Lesson1Controller::class, 'add_activity']);
    Route::get('show_lessons', [Lesson1Controller::class, 'show_lesson']);
    Route::get('show_times', [Lesson1Controller::class, 'show_time']);
    Route::get('show_activities', [Lesson1Controller::class, 'show_activity']);
    Route::group(['middleware' => 'auth:api'], function(){
        Route::put('updateuser/{id}', [AuthController::class, 'updateuser']);
        Route::put('updatepass/{id}', [AuthController::class, 'updatepass']);
        Route::delete('deleteuser/{id}', [AuthController::class, 'deleteuser']);
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
        Route::post('add_qualification_activity',[Lesson1Controller::class, 'add_qualification_activity']);
        Route::post('add_qualification_time',[Lesson1Controller::class, 'add_qualification_time']);
        Route::post('add_qualification_lesson', [Lesson1Controller::class, 'add_qualification_lesson']);
        Route::get('show_qualification_time',[Lesson1Controller::class, 'show_qualification_time']);
        Route::get('show_qualification_time_all',[Lesson1Controller::class, 'show_qualification_time_all']);
        Route::get('show_qualification_activity',[Lesson1Controller::class, 'show_qualification_activity']);
        Route::get('show_qualification_lesson', [Lesson1Controller::class, 'show_all_qualifications_lesson']);
    });
});
