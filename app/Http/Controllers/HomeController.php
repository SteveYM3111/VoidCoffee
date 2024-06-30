<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Orderan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function home(){
    return view('/');
    }
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
    public function newproduk(){
        $barang = Barang::all();
        $orderan = Orderan::all();
        $user = User::all();
        return view('newproduk', ['barang' => $barang, 'orderan' => $orderan, 'user' => $user]);
    }
    public function akun()
    {
    return view('akun');
    }
    public function descproduk()
    {
    return view('descproduk');
    }
    public function history()
    {
    $user = Auth::user();
    $orderan = Orderan::with('barang')->get();
    return view('history',['orderan' => $orderan, 'user' => $user]);
    }
}
