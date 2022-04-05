<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\SchoolStuff;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function dashboard()
    {
        return view('back.dashboard');
    }

    public function teacherDashboard()
    {
        return view('backteacher.dashboard');
    }

    public function studentDashboard()
    {
        return view('backstudent.dashboard');
    }

    public function teacherLogin()
    {
        return view('back.auth.teacher');
    }

    public function teacherLoginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->resource_id != 0){
                $schoolstuff = SchoolStuff::where('id', Auth::user()->resource_id)->first();
                $department = Department::where('id', $schoolstuff->department_id)->first();
                $check = Student::where('student_no',$request->email)->first();
            }else{
                $check = Student::where('student_no',$request->email)->first();
            }
            if ($check){
                return redirect()->route('student.anasayfa');
            }elseif ($department && $department) {
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
