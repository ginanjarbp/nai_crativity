<?php

// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);

        // Simpan artikel baru
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
        ]);

        // Redirect ke halaman artikel setelah berhasil
        return redirect()->route('dashboard');
    }
}

