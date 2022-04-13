<?php

namespace App\Http\Controllers\BackTeacher;

use App\Http\Controllers\Controller;
use App\Models\ExamDate;
use App\Models\Lesson;
use App\Models\SchoolStuff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamDateController extends Controller
{
    public function index(){
        $examDate = ExamDate::get();
        return view('backstudent.examdate.index',compact('examDate'));
    }

    public function create(){
        $check = SchoolStuff::where('email',Auth::user()->email)->first();
        $lesson = Lesson::where('lecturer',$check->id)->first();
        return view('backteacher.examdate.create',compact('lesson'));
    }

    public function store(Request $request){
        $examDate = new ExamDate();
        $examDate->lesson_name = $request->lesson_name;
        $examDate->exam_name = $request->exam_name;
        $examDate->date = $request->date;
        $examDate->save();
        toastr()->success('Başarılı', 'Sınav Günü Başarıyla Belirlendi');
        return redirect()->back();

    }
}
