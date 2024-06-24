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
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/admin/Dashboard');
            } else {
                return redirect('/newberanda');
            }
        } else {
            return redirect('login')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
