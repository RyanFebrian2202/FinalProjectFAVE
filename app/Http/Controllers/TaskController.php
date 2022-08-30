<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request){
        Task::create([
            'taskName' => $request->taskName,
            'taskDetail' => $request->taskDetail,
            'taskDeadline' => $request->taskDeadline,
            'course_id' => $request->course
        ]);

        return redirect(route(''));
    }

    public function readTask(){
        //$tasks = Task::all();
        //$tasks = Task::where('course_id','like',$course->id)

        return view('',[
            'tasks' => Task::all()->filter(request(['search']))->withQueryString()
        ]);
    }

    public function getTaskByID($id){
        $task = Task::findOrFail($id);
        $comments = Comment::where('task_id','=',$id);

        return view('',compact('task','comments'));
    }

    public function getUpdatePage($id){
        $task = Task::findOrFail($id);

        return view('',compact('task'));
    }

    public function updateTask(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update([
            'taskName' => $request->taskName,
            'taskDetail'=> $request->taskDetail,
            'taskDeadline'=> $request->taskDeadline,
            'course_id' => $request->course
        ]);

        return redirect(route(''));
    }

    public function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();

        return back();
    }
}
