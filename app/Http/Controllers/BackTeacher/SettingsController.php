<?php

namespace App\Http\Controllers\BackTeacher;

use App\Http\Controllers\Controller;
use App\Models\SchoolStuff;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function index(){
        $check = SchoolStuff::where('email',Auth::user()->email)->first();
        $user = Auth::user();
        return view('backteacher.profile.index',compact('check','user'));
    }

    public function updateProfile(Request $request,$id){
        $schoolstuff = SchoolStuff::findOrFail($id);
        if ($request->name){
            $schoolstuff->name = $request->name;
        }else if($request->name == ''){
            $schoolstuff->name =  $schoolstuff->name;
        }
        if ($request->address){
            $schoolstuff->address =$request->address;
        }else if($request->address == ''){
            $schoolstuff->address =  $schoolstuff->address;
        }
        if ($request->phone){
            $schoolstuff->phone = $request->phone;
        }else if($request->phone == ''){
            $schoolstuff->phone =  $schoolstuff->phone;
        }
        if ($request->image){
            $imageName = str_slug($request->name) . '.uploaded.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $schoolstuff->image = 'uploads/' . $imageName;
        }else if($request->image){
            $schoolstuff->image = $schoolstuff->image;
        }
        $schoolstuff->update();
        toastr()->success('Başarılı', 'Profil Bilgileriniz Başarıyla Güncellendi');
        return redirect()->route('teacher.settings.index');
    }
}
