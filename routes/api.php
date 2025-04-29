<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('students/list', [StudentController::class, 'index']);
Route::post('students/store', [StudentController::class, 'store']);
Route::get('students/delete/{id}', [StudentController::class, 'delete']);
// Update student
Route::post('students/update/{id}', [StudentController::class, 'update']);