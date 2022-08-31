<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function getQuiz(){
        return view('quiz-brief');
    }

    public function quizStart(){
        return view('quiz');
    }

    public function quizEnd(){
        return view('quiz-debrief');
    }
}
