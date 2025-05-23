<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function berita()
    {
        // Anda bisa menambahkan logika untuk mengambil data berita dari database di sini
        return view('berita');
    }

    public function produk()
    {
        // Anda bisa menambahkan logika untuk mengambil data produk dari database di sini
        return view('produk');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function informasi()
    {
        return view('informasi');
    }
}