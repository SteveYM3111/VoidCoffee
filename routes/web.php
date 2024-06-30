<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\orderanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KomentarController;

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

// Authentication routes
Route::middleware('auth')->group(function () {
    Route::get('/newberanda', [SesiController::class, 'newberanda']);
    Route::get('/newkontak', [SesiController::class, 'newkontak']);
    Route::get('/newlokasi', [SesiController::class, 'newlokasi']);
    Route::get('/newproduk', [HomeController::class, 'newproduk']);

    Route::post('/newproduk/{id_barang}', [OrderanController::class, 'create'])->name('orderan.create');

    Route::get('/akun', [SesiController::class, 'profile'])->name('profile');
});

Route::post('/history/{id_orderan}', [orderanController::class, 'cetakResi'])->name('orderan.cetakResi');
Route::get('/history', [HomeController::class, 'history']);

Route::get('/descproduk', function () {
    return view('descproduk');
});
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login'])->name('login.post');


Route::get('/admin/Dashboard', [AdminController::class, 'Dashboard']);
Route::get('/admin/Data', [AdminController::class, 'Data']);
Route::get('/admin/Barang', [BarangController::class, 'Barang'])->name('barang.index');
Route::post('/admin/Barang', [BarangController::class, 'create'])->name('barang.create');
Route::patch('/admin/Barang/{id}/edit', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/admin/Data/{id_user}', [DataController::class, 'deletePengguna'])->name('data.delete');
Route::get('/admin/Komentar', [KomentarController::class, 'Komentar']);

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/Data', [DataController::class, 'Data'])->name('data.index');
    Route::post('/Data', [DataController::class, 'create'])->name('data.create');
    Route::patch('/Data/{id_user}', [DataController::class, 'update'])->name('data.update');
    Route::delete('/Data/{id_user}', [DataController::class, 'deletePengguna'])->name('data.delete');
    Route::get('/DataCustomer', [AdminController::class, 'DataCustomer']);
    Route::get('/Komentar', [KomentarController::class, 'Komentar']);
    Route::post('/Komentar', [KomentarController::class, 'create'])->name('komentar.create');
    Route::get('/akunAdmin', [AdminController::class, 'akunAdmin']);
    Route::get('/orderan', [OrderanController::class, 'index']);
    Route::get('/Barang', [BarangController::class, 'Barang'])->name('barang.index');
    Route::post('/Barang', [BarangController::class, 'create'])->name('barang.create');
    Route::patch('/barang/{id_barang}/edit', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id_barang}', [BarangController::class, 'delete'])->name('barang.delete');
});

