<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index(){
        return view("login");
    }
    function login (Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email wajib di isi',
            'password.required'=>'Password wajib di isi'
        ]);
        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
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

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}