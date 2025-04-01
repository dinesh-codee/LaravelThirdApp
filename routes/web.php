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
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students', [StudentController::class, 'index'])->name('students'); # Url Route index is function/method name
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/update/', [StudentController::class, 'update'])->name('students.update');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
Route::POST('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
// Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
