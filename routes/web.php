<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\BarangController;
Use App\Http\Controllers\DataController;
Use App\Http\Controllers\SesiController;
use App\Http\Controllers\RegisterController;

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
    Route::get('/register', function (){
        return view('register');
});
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
Route::get('/newproduk', function () {
    return view('newproduk');
});
Route::get('/akun', function () {
    return view('akun');
});
Route::get('/descproduk', function () {
    return view('descproduk');
});
Route::get('/login', function (){
    return view('login');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.user');
Route::get('login', [SesiController::class, 'index'])->name('login');
Route::post('login', [SesiController::class, 'login']);
Route::post('logout', [SesiController::class, 'logout'])->name('logout');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/Data', [AdminController::class, 'Data']);
    Route::get('/DataCustomer', [AdminController::class, 'DataCustomer']);
    Route::get('/Komentar', [AdminController::class, 'Komentar']);
    
    Route::get('/Barang', [BarangController::class, 'Barang'])->name('barang.index');
    Route::post('/Barang', [BarangController::class, 'create'])->name('barang.create');
    Route::patch('/barang/{id}/edit', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id}', [BarangController::class, 'delete'])->name('barang.delete');

    Route::get('/Data', [DataController::class, 'Data'])->name('data.index');
    Route::post('/Data', [DataController::class, 'create'])->name('data.create');
    Route::patch('/data/{id}/edit', [DataController::class, 'update'])->name('data.update');
    Route::delete('/data/{id}', [DataController::class, 'delete'])->name('data.delete');
});