<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function dashboard(){
        return view('backdirector.dashboard');
    }

    public function teacherLogin(){
        return view('backdirector.auth.teacher');
    }

    public function teacherLoginPost(Request $request){
        if (Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return redirect()->route('admin.anasayfa');
        }
        return redirect()->route('teacherLogin')->withErrors('Email adresi veya şifre hatalı!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('teacherLogin');
    }
}
