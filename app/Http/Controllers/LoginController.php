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
        
        // Coba autentikasi dengan guard 'admin'
        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            if ($user->hasRole('Admin')) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Autentikasi gagal, periksa kembali email dan kata sandi Anda.');
            }
        } 
        else if (Auth::guard('superAdmin')->attempt($credentials)) {
            $user = Auth::guard('superAdmin ')->user();
            if ($user->hasRole('superAdmin')) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Autentikasi gagal, periksa kembali email dan kata sandi Anda.');
            }
            return redirect()->route('dashboard');
        }
        
        // Autentikasi gagal
        return redirect()->back()->with('error', 'Autentikasi gagal, periksa kembali email dan kata sandi Anda.');
    }


    public function actionlogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}