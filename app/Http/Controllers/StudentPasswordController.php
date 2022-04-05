<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentPasswordController extends Controller
{
    public function index(){
        return view('back.auth.studentpassword');
    }

    public function create(Request $request){
        $check = Student::where('student_no',$request->student_no)->first();
        if ($check){
            $user = new Users;
            $user->username = $check->name;
            $user->email = $request->student_no;
            $user->resource = 2;
            $user->resource_id = 0;
            $user->password = Hash::make($request->password);
            $user->created_at = now();
            $user->save();
            return redirect()->back()->with('mesage','Kullanıc Hesabınız Başarıyla Oluşturulmuştur');;
        }else{
            return redirect()->route('student.create.password')->withErrors('Böyle Bir Öğrenci Numarası Bulunamadı!');
        }
    }
}
