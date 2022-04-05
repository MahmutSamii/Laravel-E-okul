<?php

namespace App\Http\Controllers\BackTeacher;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Exam;
use App\Models\Lesson;
use App\Models\SchoolStuff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{

    public function createNotes($id)
    {
        $student = Student::findOrFail($id);
        $schoolstuff = SchoolStuff::where('id', Auth::user()->resource_id)->first();
        $lesson = Lesson::where('lecturer', $schoolstuff->id)->first();
        $exam = Exam::where('student_id', $id)->first();
        $class = Classes::where('teacher_of_class',$schoolstuff->id)->first();
        return view('backteacher.class.create', compact('student', 'lesson','exam','class'));
    }

    public function storePoint(Request $request, $id)
    {
        $exam = new Exam();
        $exam->student_id = $id;
        $exam->lesson_id = $request->lesson_id;
        $exam->midterm_exam = $request->midterm_exam;
        $exam->final_exam = $request->final_exam;
        $exam->makeup_exam = $request->makeup_exam;
        $exam->created_at = now();
        $exam->save();
        toastr()->success('Başarılı', 'Öğrenci Sınav Notu Başarıyla Eklendi');
        return redirect()->back();
    }


    public function updatePoint(Request $request,$id){
        $exam = Exam::where('student_id',$id)->first();
        Exam::findOrFail($exam->student_id);
        $exam->student_id = $id;
        $exam->lesson_id = $request->lesson_id;
        $exam->midterm_exam = $request->midterm_exam;
        $exam->final_exam = $request->final_exam;
        $exam->makeup_exam = $request->makeup_exam;
        $exam->updated_at = now();
        $exam->update();
        toastr()->success('Başarılı', 'Öğrenci Sınav Notu Başarıyla Güncellendi');
        return redirect()->back();
    }
}
