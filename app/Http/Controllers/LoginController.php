<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Department;
use App\Models\SchoolStuff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function dashboard()
    {
        $class = Classes::count();
        if (Department::where('department_name', 'Öğretmen')) {
            $department = Department::where('department_name', 'Öğretmen')->first();
            $depHeadMaster = Department::where('slug', 'mudur-yardimcisi')->first();
            $headmaster = SchoolStuff::where('department_id', $depHeadMaster->id)->count();
            $teachers = SchoolStuff::where('department_id', $department->id)->count();
            $student = Student::count();
            return view('back.dashboard', compact('teachers', 'student', 'headmaster', 'class'));
        }

    }

    public function teacherDashboard()
    {
        return view('backteacher.dashboard');
    }

    public function studentDashboard()
    {
        $check = Student::where('student_no', Auth::user()->email)->first();
        $checkClass = Classes::where('id', $check->classroom)->first();
        $teacher = SchoolStuff::where('id', $checkClass->teacher_of_class)->first();
        return view('backstudent.dashboard', compact('checkClass', 'teacher'));
    }

    public function teacherLogin()
    {
        return view('back.auth.teacher');
    }

    public function teacherLoginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->resource_id != 0) {
                $schoolstuff = SchoolStuff::where('id', Auth::user()->resource_id)->first();
                $department = Department::where('id', $schoolstuff->department_id)->first();
                $check = Student::where('student_no', $request->email)->first();
            } else {
                $check = Student::where('student_no', $request->email)->first();
            }
            if ($check) {
                return redirect()->route('student.anasayfa');
            } elseif ($department && $department) {
                if ($department->slug == 'mudur') {
                    return redirect()->route('admin.anasayfa');
                } elseif ($department->slug == 'ogretmen' || $department->slug == 'mudur-yardimcisi') {
                    return redirect()->route('teacher.anasayfa');
                }
            }
        }
        return redirect()->route('teacherLogin')->withErrors('Email adresi veya şifre hatalı!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('teacherLogin');
    }
}
