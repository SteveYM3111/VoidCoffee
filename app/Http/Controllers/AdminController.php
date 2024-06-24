<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('/admin/Barang');
    }

    public function Dashboard()
    {
        return view('/admin/Dashboard');
    }

    public function Data()
    {
        $data = User::all();
        return view('admin/Data', compact('data'));
    }
    

    public function Komentar()
    {
        return view('/admin/Komentar');
    }
    public function orderan()
    {
        return view('/admin/orderan');
    }
}