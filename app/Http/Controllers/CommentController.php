<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createComment(Request $request, $id){
        Comment::crate([
            'content' => $request->content,
            'time' => date("Y/m/d"),
            'user_id' => Auth::user()->id,
            'task_id' => $id
        ]);

        return redirect(route('taskDetail'));
    }
}
