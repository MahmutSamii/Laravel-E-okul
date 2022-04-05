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
       $check = Exam::where('student_id',$student->id)->first();
       $lessonName = Lesson::where('id',$check->lesson_id)->first();
       if ($check->makeup_exam){
           $midtermExamAverage = ($check->midterm_exam*20)/100;
           $finalExamAverage = ($check->makeup_exam*80)/100;
           $average = ($midtermExamAverage+$finalExamAverage);
       }else{
           $midtermExamAverage = ($check->midterm_exam*20)/100;
           $finalExamAverage = ($check->final_exam*80)/100;
           $average = ($midtermExamAverage+$finalExamAverage);
       }
       return view('backstudent.exam.index',compact('check','lessonName','average'));
    }
}
