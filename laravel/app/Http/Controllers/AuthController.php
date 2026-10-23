<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $kadi = $request->input('username');
        $sifre = $request->input('password');

        if ($kadi === env('DB_USERNAME') && $sifre === env('DB_PASSWORD')) {
            session(['giris_yapildi' => true]);
            return redirect('/admin');
        }

        return back()->with('hata', 'Kullanıcı adı veya şifre yanlış!');
    }

    public function logout()
    {
        session()->forget('giris_yapildi');
        return redirect('/');
    }
}
