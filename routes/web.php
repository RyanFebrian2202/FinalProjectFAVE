<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('login');

Route::middleware(['auth'])->group(function(){
    Route::get('/user',[HomeController::class,'getDashboard'])->name('userDashboard');

    // Course
    Route::get('/user/{id}/course',[CourseController::class,'getCourseDetail'])->name('courseDetail');

    // Task
    Route::get('/user/course/{id}/task',[TaskController::class,'getTaskByID'])->name('taskDetail');

    // Comment
    Route::post('/user/course/task/{id}/comment',[CommentController::class,'createComment'])->name('postComment');

    // Quiz
    Route::get('/user/quiz',[QuizController::class,'getQuiz'])->name('getQuiz');
});

Route::middleware(['auth','admin'])->group(function(){
    // Participant
    Route::get('/admin',[HomeController::class,'getAdminDashboard'])->name('adminDashboard');

    // Task
    Route::get('/admin/task',[TaskController::class,'readTask'])->name('adminTask');
    Route::get('/admin/task/create',[TaskController::class,'getCreateTask'])->name('getCreateTask');
    Route::post('/admin/task/create',[TaskController::class,'createTask'])->name('createTask');
    Route::get('/admin/task/{id}/edit',[TaskController::class,'getUpdatePage'])->name('getUpdateTask');
    Route::patch('/admin/task/{id}/edit',[TaskController::class,'updateTask'])->name('updateTask');
    Route::delete('/admin/task/{id}/delete',[TaskController::class,'deleteTask'])->name('deleteTask');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
