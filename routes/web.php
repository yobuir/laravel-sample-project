<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class,'index']);
Route::post('/student/save', [StudentController::class,'saveData']);
Route::get('/student/list', [StudentController::class, 'getData']);
