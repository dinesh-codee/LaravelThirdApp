<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\RolesController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// MIDDLEWARE FOR AUTHENTICATION
// Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // WORKING WITH STUDENTS
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students', [StudentController::class, 'index'])->name('students'); # Url Route index is function/method name
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/students/update/', [StudentController::class, 'update'])->name('students.update');
    Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');

    // WORKING WITH TEACHERS
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::POST('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');

    // WORKING WITH TEAMS
    Route::get('/teams', [TeamsController::class, 'index'])->name('teams.index');
    Route::post('/teams/store', [TeamsController::class, 'store'])->name('teams.store');

    // Route::get('/roles',[RolesController::class, 'index'])->name('roles.index');
// });