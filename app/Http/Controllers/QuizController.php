<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    public function getQuiz(){
        return view('quiz-brief');
    }

    public function quizStart(Request $request){
        $user = $request->user();
        $url = 'https://jservice.io/api/final?count=10';
        $collections = Http::get($url);
        $decode = json_decode($collections);
        return view('quiz', ['user'=>$user,'questions' => $decode]);
    }

    public function quizEnd(Request $request){
        $user = $request->user();
        return view('quiz-debrief',compact('user'));
    }
}
