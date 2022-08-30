<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Task;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourseDetail($id){
        $courses = Course::all();
        $course = Course::findOrFail($id);
        $tasks = Task::where('course_id','=',$id)->get();

        return view('SamplePelajaran',compact('courses','course','tasks'));
    }
}
