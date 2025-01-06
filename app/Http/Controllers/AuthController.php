<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($request->email === 'admin@gmail.com') {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect ke halaman admin
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
        } else {
            return back()->withErrors(['password' => 'Invalid password for admin account']);
        }
    }
    
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Regenerasi sesi untuk keamanan
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate(Login::rules());

        // Menyimpan data login baru
        $user = new Login();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->id_karyawan = $request->id_karyawan;
        $user->divisi = $request->divisi;
        $user->jabatan = $request->jabatan;
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful');
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user

        // Hapus sesi pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect()->route('login')->with('status', 'You have been logged out.');
    }
}