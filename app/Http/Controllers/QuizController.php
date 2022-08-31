<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{
    public function getQuiz(){
        return view('quiz-brief');
    }

    public function quizStart(){
        $url = 'https://jservice.io/api/final?count=10';
        $collections = Http::get($url);
        $decode = json_decode($collections);
        return view('quiz', ['questions' => $decode]);
    }

    public function quizEnd(){
        return view('quiz-debrief');
    }
}
