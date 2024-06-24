<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('newberandalogin');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/kontak', function () { 
    return view('kontak'); 
});
Route::get('/lokasi', function (){
    return view('lokasi');
});
Route::get('/tentang', function (){
    return view('tentang');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/pembayaran', function (){
    return view('pembayaran');
});
Route::get('/newberanda', function () {
    return view('newberanda');
});
Route::get('/newkontak', function () {
    return view('newkontak');
});
Route::get('/newlokasi', function () {
    return view('newlokasi');
});

Route::get('/newproduk', [HomeController::class, 'newproduk']);
Route::post('/newproduk/{id_barang}', [OrderanController::class, 'create'])->name('orderan.create');


Route::get('/akun', function () {
    return view('akun');
});
Route::get('/descproduk', function () {
    return view('descproduk');
});
Route::get('/login', function (){
    return view('login');
});
Route::post('/login', [SesiController::class, 'login'])->name('login');

Route::get('/admin/Dashboard', [AdminController::class, 'Dashboard']);
Route::get('/admin/Data', [AdminController::class, 'Data']);
Route::get('/admin/Barang', [BarangController::class, 'Barang'])->name('barang.index');
Route::post('/admin/Barang', [BarangController::class, 'create'])->name('barang.create');
Route::patch('/admin/Barang/{id}/edit', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/admin/Data/{id_user}', [DataController::class, 'deletePengguna'])->name('data.delete');
Route::get('/admin/Komentar', [AdminController::class, 'Komentar']);

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/Data', [DataController::class, 'Data'])->name('data.index');
    Route::post('/Data', [DataController::class, 'create'])->name('data.create');
    Route::patch('/Data/{id_user}', [DataController::class, 'update'])->name('data.update');
    Route::delete('/Data/{id_user}', [DataController::class, 'deletePengguna'])->name('data.delete');
    Route::get('/DataCustomer', [AdminController::class, 'DataCustomer']);
    Route::get('/Komentar', [AdminController::class, 'Komentar']);
    Route::get('/orderan', [OrderanController::class, 'index']);

    Route::get('/Barang', [BarangController::class, 'Barang'])->name('barang.index');
    Route::post('/Barang', [BarangController::class, 'create'])->name('barang.create');
    Route::patch('/barang/{id_barang}/edit', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id_barang}', [BarangController::class, 'delete'])->name('barang.delete');
    
});
