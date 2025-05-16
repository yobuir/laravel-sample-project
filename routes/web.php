<?php

use App\Http\Controllers\LoginController;
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


Route::get('/register',[LoginController::class,'register']);
Route::post('/register/user/save',[LoginController::class, 'saveUser']);


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login/user',[LoginController::class,'auth']);


Route::get('/auth', [LoginController::class, 'getAuthUser'])->middleware('auth');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login')->with('success', 'Logout successful!');
});
