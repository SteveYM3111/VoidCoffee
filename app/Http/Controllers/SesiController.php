<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            \Log::info('Login successful', ['user' => Auth::user()]);
            $user = Auth::user();
            \Log::info('User role', ['role' => $user->role]);   
            if ($user->role == 'admin') {
                return redirect('/admin/Dashboard');
            } else {
                return redirect('/newberanda');
            }
        } else {
            \Log::warning('Login failed', ['email' => $request->email]);
            return redirect('login')->withErrors('Username dan Password tidak sesuai')->withInput();
        }   
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('akun', ['user' => $user]);
    }

    public function newberanda()
    {
        $user = Auth::user();
        return view('newberanda', ['user' => $user]);
    }

    public function newkontak()
    {
        $user = Auth::user();
        return view('newkontak', ['user' => $user]);
    }

    public function newlokasi()
    {
        $user = Auth::user();
        return view('newlokasi', ['user' => $user]);
    }

}
