<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function users()
    {
        return view('admin.users');  // Placeholder view
    }

    public function settings()
    {
        return view('admin.settings');  // Placeholder view
    }

    public function reports()
    {
        return view('admin.reports');  // Placeholder view
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
        } else {
            return back()->with('error', 'email atau password salah.');
        }
    }
    public function logout()
    {
        return view('admin.logout');  // Placeholder view
    }

}
