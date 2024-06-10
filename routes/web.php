<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\BarangController;

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
    Route::get('/login', function (){
        return view('login');
});
    Route::get('/register', function (){
        return view('register');
});
    Route::get('/pembayaran', function (){
        return view('pembayaran');
});

Route::get('/admin/Dashboard', [AdminController::class, 'Dashboard']);
Route::get('/admin/DataAdmin', [AdminController::class, 'DataAdmin']);
Route::get('/admin/DataCustomer', [AdminController::class, 'DataCustomer']);
Route::get('/admin/Barang', [BarangController::class, 'Barang'])->name('barang.index');
Route::post('/admin/Barang', [BarangController::class, 'create'])->name('barang.create');
Route::patch('/admin/barang/{id}/edit', [BarangController::class,'update'])->name('barang.update');
Route::delete('/admin/barang/{id}', [BarangController::class, 'delete'])->name('barang.delete');   
Route::get('/admin/Komentar', [AdminController::class, 'Komentar']);
