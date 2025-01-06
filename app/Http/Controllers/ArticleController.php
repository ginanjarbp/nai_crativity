<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Artikel;
 // Pastikan model 'Article' sudah dibuat

class ArticleController extends Controller
{
    // Metode untuk menampilkan daftar semua artikel (jika dibutuhkan)
    public function index()
    {
        // Ambil semua data artikel dari database
        $articles = Article::all();

        // Kirim data ke view (jika dibutuhkan daftar artikel)
        return view('ArtikelHome', compact('articles'));
    }

    public function show($id)
    {
        // Cari artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);
    // Cek apakah artikel ditemukan
    if (!$artikel) {
        abort(404, 'Artikel tidak ditemukan');
    }

    // Debug data artikel
    dd($artikel); // Ini akan menghentikan eksekusi dan menampilkan data artikel
        // Kirim artikel ke view ArtikelHome.blade.php
        return view('ArtikelHome', compact('artikel'));
    }
    

}