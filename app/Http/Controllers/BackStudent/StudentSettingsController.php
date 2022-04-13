<?php

namespace App\Http\Controllers\BackStudent;

use App\Http\Controllers\Controller;
use App\Models\SchoolStuff;
use App\Models\Student;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentSettingsController extends Controller
{
    public function index(){
        $check = Users::where('email',Auth::user()->email)->first();
        $student = Student::where('student_no',$check->email)->first();
        $user = Auth::user();
        return view('backstudent.profile.index',compact('student','user'));
    }

    public function updateProfile(Request $request,$id){
        $student = Student::findOrFail($id);
        if ($request->name){
            $student->name = $request->name;
        }else if($request->name == ''){
            $student->name =  $student->name;
        }
        if ($request->phone){
            $student->phone = $request->phone;
        }else if($request->phone == ''){
            $student->phone =  $student->phone;
        }
        if ($request->image){
            $imageName = str_slug($request->name) . '.student-uploaded.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $student->image = 'uploads/' . $imageName;
        }else if($request->image){
            $student->image = $student->image;
        }
        $student->update();
        toastr()->success('Başarılı', 'Profil Bilgileriniz Başarıyla Güncellendi');
        return redirect()->route('student.settings.index');
    }
}
