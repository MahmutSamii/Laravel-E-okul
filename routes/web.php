<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentPasswordController;
use App\Http\Controllers\BackTeacher\ExamController;
use App\Http\Controllers\BackTeacher\CalendarController;
use App\Http\Controllers\BackStudent\StudentLessonController;
use App\Http\Controllers\BackStudent\StudentExamController;
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

Route::get('/student/create/password',[StudentPasswordController::class,'index'])->name('student.create.password');
Route::post('/student/create/password',[StudentPasswordController::class,'create'])->name('student.create.password.post');



Route::prefix('admin')->middleware('authenticated')->name('admin.')->group(function(){
    Route::get('/anasayfa',[LoginController::class,'dashboard'])->name('anasayfa');
    //Department Controller
    Route::resource('departments',DepartmentController::class);
    //Lesson Controller
    Route::resource('lessons',LessonController::class);
    //Classes Controllerç.
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


Route::prefix('teacher')->middleware('authenticated')->name('teacher.')->group(function(){
    Route::get('/anasayfa',[LoginController::class,'teacherDashboard'])->name('anasayfa');
    //Class Controller
    Route::resource('class',\App\Http\Controllers\BackTeacher\ClassController::class);
    Route::get('class/{id}/students',[\App\Http\Controllers\BackTeacher\ClassController::class,'indexStudent'])->name('index.student');
    //Exam Controller
    Route::get('class/students/{id}/points',[ExamController::class,'createNotes'])->name('create.student');
    Route::post('class/students/{id}/points/create',[ExamController::class,'storePoint'])->name('store.student');
    Route::post('class/students/{id}/points/update',[ExamController::class,'updatePoint'])->name('update.student');
    //Calendar Controller
    Route::resource('calendar',CalendarController::class);
    Route::get('/cikis',[LoginController::class,'logout'])->name('logout');
});


Route::prefix('student')->middleware('authenticated')->name('student.')->group(function(){
    Route::get('/anasayfa',[LoginController::class,'studentDashboard'])->name('anasayfa');
    Route::get('/ders-kayit',[StudentLessonController::class,'index'])->name('lesson.index');
    Route::post('/ders-kayit/{id}/create',[StudentLessonController::class,'create'])->name('lesson.create');
    Route::get('/ders-notlari',[StudentExamController::class,'index'])->name('exam.index');

    Route::get('/cikis',[LoginController::class,'logout'])->name('logout');
});
