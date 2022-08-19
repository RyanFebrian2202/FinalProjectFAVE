<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request){

    }

    public function readTask(){
        $tasks = Task::all();
        //$tasks = Task::where('course_id','like',$course->id)
    }

    public function getTaskByID($id){
        $task = Task::findOrFail($id);
    }

    public function updateTask(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update([

        ]);
    }

    public function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
