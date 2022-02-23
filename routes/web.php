<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/blog', [Blogcontroller::class, 'index'])->name('add-blog');



Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::post('/new-blog', [BlogController::class, 'create'])->name('new-blog');
