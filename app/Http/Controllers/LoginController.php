<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        // if (Auth::check()) {
        //     return redirect('');
        // }else{
        //     return view('admin.auth.login2');
        // }
        return view('admin.auth.login2');

    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        $user = Auth::guard('admin')->attempt($credentials);
if ($user) {
    // Autentikasi berhasil, user adalah superAdmin
    dd($user);
} else {
    // Autentikasi gagal
    dd($user);
}

    }

    public function actionlogout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}