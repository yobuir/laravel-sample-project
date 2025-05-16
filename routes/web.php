<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class,'index']);
Route::post('/student/save', [StudentController::class,'saveData']);
Route::get('/student/list', [StudentController::class, 'getData']);
Route::get('student/{id}', [StudentController::class, 'getDataById']);
Route::post('student/delete/{id}',[StudentController::class, 'deleteStudent']);
Route::post('/student/update-student/{id}',[StudentController::class, 'update']);
