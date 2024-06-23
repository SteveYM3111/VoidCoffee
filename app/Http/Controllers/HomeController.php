<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function beranda()
    {
    return view('beranda');
    }
    public function tentang()
    {
    return view('tentang');
    }
    public function kontak()
    {
    return view('kontak');
    }
    public function galeri()
    {
    return view('galeri');
    }
    public function produk()
    {
    return view('produk');
    }
    public function lokasi()
    {
    return view('lokasi');
    }
    public function register()
    {
    return view('register');
    }
    public function pembayaran()
    {
    return view('pembayaran');
    }
    public function newberanda()
    {
    return view('newberanda');
    }
    public function newkontak()
    {
    return view('newkontak');
    }
    public function newlokasi()
    {
    return view('newlokasi');
    }
    public function newproduk()
    {
    return view('newproduk');
    }
    public function akun()
    {
    return view('akun');
    }
    public function descproduk()
    {
    return view('descproduk');
    }
} 
