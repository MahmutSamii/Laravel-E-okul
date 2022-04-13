<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'different:old_password',
        ]);

        $user = Users::findOrFail($id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->update();
            toastr()->success('Başarılı', 'Şifreniz Başarıyla Güncellendi');
            return redirect()->route('teacher.settings.index');
        }else{
            toastr()->error('Lütfen Eski Şifrenizin Doğru Olduğundan Emin Olun');
            return redirect()->route('teacher.settings.index');
        }

    }
}
