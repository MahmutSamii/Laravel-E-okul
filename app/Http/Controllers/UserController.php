<?php

namespace App\Http\Controllers;

use App\Models\SchoolStuff;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{

    public function index(){
        $users = Users::get();
        return view('back.users.index',compact('users'));
    }

    public function create($id){
        $schoolstuff = SchoolStuff::findOrFail($id);
        return view('back.users.create',compact('schoolstuff'));
    }

    public function store(Request $request){
       $users = new Users();
       $users->username = $request->username;
       $users->email = $request->email;
       $users->password = $request->password;
       $users->save();
       toastr()->success('Başarılı', 'Kullanıcı Başarıyla Oluşturuldu Ve Kullanıcı Bilgileri Başarıyla Email Hesabına Gönderildi.');
       return redirect()->back();
    }
}
