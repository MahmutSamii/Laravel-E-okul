<?php

namespace App\Http\Controllers\BackStudent;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLessonController extends Controller
{
    public function index(){
        $lessons = Lesson::get();
        $user = Student::where('student_no',Auth::user()->email)->first();
        return view('backstudent.class.create',compact('lessons','user'));
    }

    public function create(Request $request,$id){

        foreach($request->lesson_id as $lessonId)
        {
            $studentLesson = new StudentLesson();
            $studentLesson->student_id = $id;
            $studentLesson->lesson_id = $lessonId;
            $studentLesson->created_at =now();
            $studentLesson->save();
        }
        toastr()->success('Başarılı', 'Ders Kaydınız Başarıyla Gerçekleştirilmiştir.');
        return redirect()->back();

    }
}
