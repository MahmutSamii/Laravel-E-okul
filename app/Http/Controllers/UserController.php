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
       $users->resource_id = $request->resource_id;
       $users->resource = 1;
       $users->password = Hash::make($request->password);
       $users->created_at = now();
       $users->save();
       /*
        $data = [];
       $data['name'] = $users->username;
       $data['password'] = $request->password;
       $data['id'] = $users->id;
       Mail::to($users->email)->send(new SendMail($data));
        */
       toastr()->success('Başarılı', 'Kullanıcı Başarıyla Oluşturuldu Ve Kullanıcı Bilgileri Başarıyla Email Hesabına Gönderildi.');
       return redirect()->back();
    }

    public function destroy($id){
        $users = Users::findOrFail($id);
        $users->delete();
        toastr()->success('Başarılı', 'Kullanıcı Başarıyla Silindi');
        return redirect()->back();
    }
}
