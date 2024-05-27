<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\Hasher;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            session()->flash('success', 'Selamat Datang');
            return redirect()->intended('/dashboard'); // Asumsi pengguna masuk ke dashboard setelah login
        }
    
        return back()->withErrors(['username' => 'Username atau Password salah'])->onlyInput('username');
    }
    

    public function logout()
    {
        Auth::logout();
        session()->flash('success', 'Anda berhasil keluar.');
        return redirect('login');
    }
}
