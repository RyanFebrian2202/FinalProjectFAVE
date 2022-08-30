<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDashboard(Request $request){
        $user = $request->user();

        if ($user->role == 0){
            return view('');
        } else {
            return redirect(route(''));
        }
    }
}
