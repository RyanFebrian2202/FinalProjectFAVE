<?php

use App\Http\Controllers\GuzzleController;
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
<<<<<<< HEAD
    return view('db');
=======
    return view('index');
})->name('login');

Route::get('/test',[GuzzleController::class, 'index'])->name('test');

Route::middleware(['auth'])->group(function(){

});

Route::middleware(['auth','admin'])->group(function(){

>>>>>>> 21e2015ed7fb5f18fd4559eddd4ddd6013b3082b
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
