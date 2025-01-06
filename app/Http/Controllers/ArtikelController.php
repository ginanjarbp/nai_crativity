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

    public function edit($id)
{
    // Cari artikel berdasarkan ID
    $artikel = Artikel::findOrFail($id);

    // Kembalikan ke view edit dengan membawa data artikel
    return view('artikel.edit', compact('artikel'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Mencari artikel berdasarkan ID
    $artikel = Artikel::findOrFail($id);

    // Menyimpan data artikel yang diperbarui
    $artikel->judul = $validatedData['judul'];
    $artikel->konten = $validatedData['konten'];

    // Jika ada gambar baru, simpan gambar dan perbarui di database
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($artikel->gambar) {
            Storage::delete($artikel->gambar);
        }

        // Simpan gambar baru
        $imagePath = $request->file('gambar')->store('public/artikel');
        $artikel->gambar = $imagePath;
    }

    // Menyimpan perubahan ke database
    $artikel->save();

    // Redirect ke halaman artikel dengan pesan sukses
    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
}


    // Menampilkan daftar artikel
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.artikel', compact('artikels'));
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


// Menampilkan detail artikel berdasarkan ID
public function show($id)
{
    // Cari artikel berdasarkan ID, jika tidak ditemukan akan menampilkan error 404
    $artikel = Artikel::findOrFail($id);
    
    // Kirim data artikel ke view
    return view('artikel.show', compact('artikel'));
}

}

