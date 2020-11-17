<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Activity;
use App\Models\Time;
use App\Models\Lesson;
use App\Models\Answer;
use App\Models\Qualification_activity;
use App\Models\Qualification_time;
use App\Models\Qualification_lesson;
use Illuminate\Http\Request;

class Lesson1Controller extends Controller
{
    //
    function add_answer(Request $request){
        $request->validate([
            'lesson_id' => 'required|string',
            'time_id' => 'required|string',
            'activity_id' => 'required|string',
            'answer' => 'required|string',
        ]);
        $answer = new Answer();
        $answer->lesson_id = $request->lesson_id;
        $answer->time_id = $request->time_id;
        $answer->activity_id = $request->activity_id;
        $answer->answer = $request->answer;
        $answer->save();
    }
    function add_lesson(Request $request){
        $request->validate([
            'lesson' => 'required|string',
        ]);
        $lesson = new Lesson();
        $lesson->lesson = $request->lesson;
        $lesson->save();
        return response([
            'message' => 'ok',
        ]);
    }
    function add_time(Request $request){
        $request->validate([
            'verbalTense' => 'required|string',
        ]);
        $time = new Time();
        $time->verbalTense = $request->verbalTense;
        $time->save();
        return response([
            'message' => 'ok',
        ]);
    }
    function add_activity(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        $activity = new Activity();
        $activity->name = $request->name;
        $activity->save();
        return response([
            'message' => 'ok',
        ]);
    }
    function add_qualification_activity(Request $request){
        $request->validate([
            'user_id' => 'required|string',
            'lesson_id'=> 'required|string',
            'time_id' => 'required|string',
            'activity_id' => 'required|string',
            'qualification' => 'required|string',
        ]);
        $qualification = new Qualification_activity();
        $qualification->user_id = $request->user_id;
        $qualification->lesson_id = $request->lesson_id;
        $qualification->time_id = $request->time_id;
        $qualification->activity_id = $request->activity_id;
        $qualification->qualification = $request->qualification;
        $qualification->save();
        return response([
            'message' => 'ok',
        ]);
    }
    function add_qualification_time(Request $request){
        $request->validate([
            'user_id' => 'required|string',
            'lesson_id'=> 'required|string',
            'time_id' => 'required|string',
            'qualification' => 'required|string',
        ]);
        $qualification = new Qualification_time();
        $qualification->user_id = $request->user_id;
        $qualification->lesson_id = $request->lesson_id;
        $qualification->time_id = $request->time_id;
        $qualification->qualification = $request->qualification;
        $qualification->save();
        return response([
            'message' => 'ok',
        ]);
    }
    function add_qualification_lesson(Request $request){
        $request->validate([
            'user_id' => 'required|string',
            'lesson_id'=> 'required|string',
            'qualification' => 'required|string',
        ]);
        $qualification = new Qualification_lesson();
        $qualification->user_id = $request->user_id;
        $qualification->lesson_id = $request->lesson_id;
        $qualification->qualification = $request->qualification;
        $qualification->save();
        return response()->json([
            'message' => 'ok',
        ]);
     }
    
    function show_qualification_activity(Request $request){
        $qualifications = Qualification_activity::all();
        return response()->json([
            'qualifications' => $qualifications,]);
    }
    function show_qualification_time(Request $request){
        $qualifications = Qualification_time::all();
        return response()->json([
            'qualifications' => $qualifications,
        ]);
    }
    function show_qualification_lesson(Request $request){
        $qualifications = Qualification_lesson::all();
        return response()->json([
             'qualifications' => $qualifications,
        ]);
    }
    function show_all_qualifications_lesson(Request $request){
        $qualifications = User::join("qualification_lessons", "qualification_lessons.user_id", "=", "users.id")
        ->select("users.id","users.name", "users.email", "qualification_lessons.lesson_id", "qualification_lessons.qualification")
        ->get();
        return response()->json([
            'qualifications' => $qualifications,
        ]);
    }
}
