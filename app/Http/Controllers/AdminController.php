<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function DataAdmin()
    {
        return view('/admin/DataAdmin');
    }

    public function DataCustomer()
    {
        return view('/admin/DataCustomer');
    }

    public function Komentar()
    {
        return view('/admin/Komentar');
    }
}