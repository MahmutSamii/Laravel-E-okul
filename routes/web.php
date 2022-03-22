<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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




Route::get('/teacherLogin',[LoginController::class,'teacherLogin'])->name('teacherLogin');
Route::post('/teacherLogin',[LoginController::class,'teacherLoginPost'])->name('teacherLogin.post');



Route::prefix('admin')->middleware('authenticated')->name('admin.')->group(function(){
    Route::get('/anasayfa',[LoginController::class,'dashboard'])->name('anasayfa');
    //Department Controller
    Route::resource('departments',DepartmentController::class);
    //Lesson Controller
    Route::resource('lessons',LessonController::class);
    //Classes Controller
    Route::resource('classes',ClassController::class);
    //SchoolStuff Controller
    Route::resource('teachers',TeacherController::class);
    //Student Controller
    Route::resource('students',StudentController::class);
    //User Controller
    Route::get('/users/liste',[UserController::class,'index'])->name('user.index');
    Route::get('/users/olustur/{id}',[UserController::class,'create'])->name('user.create');
    Route::post('/users/olustur',[UserController::class,'store'])->name('user.store');
    Route::get('/users/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');

    Route::get('/cikis',[LoginController::class,'logout'])->name('logout');
});
