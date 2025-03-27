<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeamsController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/students', [StudentController::class, 'index'])->name('students'); # Url Route index is function/method name
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');
// Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
