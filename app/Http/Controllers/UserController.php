<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\SchoolStuff;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index(){
        $users = Users::get();
        return view('backdirector.users.index',compact('users'));
    }

    public function create($id){
        $schoolstuff = SchoolStuff::findOrFail($id);
        $password = Str::random(8);
        return view('backdirector.users.create',compact('schoolstuff','password'));
    }

    public function store(Request $request){
       $users = new Users();
       $users->username = $request->username;
       $users->email = $request->email;
       $users->password = Hash::make($request->password);
       $users->save();
       $data = [];
       $data['name'] = $users->username;
       $data['password'] = $request->password;
       $data['id'] = $users->id;
       Mail::to($users->email)->send(new SendMail($data));
       toastr()->success('Başarılı', 'Kullanıcı Başarıyla Oluşturuldu Ve Kullanıcı Bilgileri Başarıyla Email Hesabına Gönderildi.');
       return redirect()->back();
    }

    public function destroy($id){
        $lesson = Users::findOrFail($id);
        $lesson->delete();
        toastr()->success('Başarılı', 'Kullanıcı Başarıyla Silindi');
        return redirect()->back();
    }
}
