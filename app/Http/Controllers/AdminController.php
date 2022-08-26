<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAllUser(){

        return view('',[
            'users' => User::where('role','=',0)->filter(request(['search']))->withQueryString()
        ]);
    }
}
