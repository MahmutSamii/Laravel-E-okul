<?php

namespace App\Http\Controllers\BackStudent;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentExamController extends Controller
{
    public function index(){
       $student = Student::where('student_no',Auth::user()->email)->first();
       $check = Exam::where('student_id',$student->id)->get();
       return view('backstudent.exam.index',compact('check'));
    }
}
