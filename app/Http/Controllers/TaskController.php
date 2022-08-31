<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getCreateTask(){
        $courses = Course::all();

        return view('add-task',compact('courses'));
    }

    public function createTask(Request $request){
        Task::create([
            'taskName' => $request->taskName,
            'taskDetail' => $request->taskDetail,
            'taskDeadline' => $request->taskDeadline,
            'course_id' => $request->course
        ]);

        return redirect(route('adminTask'));
    }

    public function readTask(){
        //$tasks = Task::all();
        //$tasks = Task::where('course_id','like',$course->id)
        $limit = 7;

        return view('admin-task',[
            'tasks' => Task::filter(request(['search']))->paginate($limit)->withQueryString()
        ]);
    }

    public function getTaskByID($id){
        $courses = Course::all();
        $task = Task::findOrFail($id);
        $comments = Comment::where('task_id','=',$id)->get();

        return view('SampleTugas',compact('courses','task','comments'));
    }

    public function getUpdatePage($id){
        $courses = Course::all();
        $task = Task::findOrFail($id);

        return view('edit-task',compact('task','courses'));
    }

    public function updateTask(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update([
            'taskName' => $request->taskName,
            'taskDetail'=> $request->taskDetail,
            'taskDeadline'=> $request->taskDeadline,
            'course_id' => $request->course
        ]);

        return redirect(route('adminTask'));
    }

    public function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back();
        //return redirect(route('adminTask));
    }
}
