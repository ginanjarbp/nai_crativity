<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Menampilkan form untuk menambah artikel
    public function create()
    {
        return view('artikel.create');
    }

    // Menyimpan artikel ke dalam database
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/artikel');
        }

        // Simpan artikel ke dalam database
        Artikel::create([
            'judul' => $validated['judul'],
            'konten' => $validated['konten'],
            'gambar' => $imagePath,
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    // Menampilkan daftar artikel
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index', compact('artikels'));
    }

    // Menghapus artikel berdasarkan ID
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($artikel->gambar) {
            Storage::delete($artikel->gambar);
        }

        // Hapus artikel dari database
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
}
