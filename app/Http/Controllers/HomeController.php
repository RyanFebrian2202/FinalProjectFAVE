<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $limit = 7;

    public function getDashboard(Request $request){
        $user = $request->user();
        $courses = Course::all();
        $courses1 = Course::take(3)->get();
        $courses2 = Course::skip(3)->take(3)->get();

        if ($user->role == 0){
            return view('db',compact('courses','courses1','courses2'));
        } else {
            return redirect(route('adminDashboard'));
        }
    }

    public function getAdminDashboard(){

        return view('admindb',[
            'users' => User::where('role', '=', 0)->filter(request(['search']))->paginate($this->limit)->withQueryString()
        ]);
    }
}
