<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return view('hallo');
});

Route::get('/artikel', [ArtikelController::class,'index'])->name('artikel.index');
Route::post('/artikel', [ArtikelController::class,'store'])->name('artikel.store');
Route::get('/artikel/{id}/edit', [ArtikelController::class,'edit'])->name('artikel.edit');
Route::put('/artikel/{id}/update', [ArtikelController::class,'update'])->name('artikel.update');
Route::delete('/artikel/{id}/delete', [ArtikelController::class,'destroy'])->name('artikel.delete');
