<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

Route::get('/admin/dashboard', function () {
    return view('home');
})->name('admin.dashboard');


Route::get('/', [DesaController::class, 'home'])->name('home');
Route::get('/berita', [DesaController::class, 'berita'])->name('berita');
Route::get('/produk', [DesaController::class, 'produk'])->name('produk');
Route::get('/kontak', [DesaController::class, 'kontak'])->name('kontak');
Route::get('/informasi', [DesaController::class, 'informasi'])->name('informasi');
