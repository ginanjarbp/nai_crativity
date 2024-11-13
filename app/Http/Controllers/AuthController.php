<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Method untuk menampilkan form login
    public function showLoginForm()
    {
        return view('.login'); // Menampilkan view form login di resources/views/auth/login.blade.php
    }

    // Method untuk menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (auth()->attempt($request->only('email', 'password'))) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->route('dashboard')->with('success', 'Login berhasil');
        }

        // Redirect kembali ke form login jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        auth()->logout(); // Logout user
        return redirect()->route('welcome'); // Redirect ke halaman login
    }
}
