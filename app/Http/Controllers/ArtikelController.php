<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::latest()->get(); // Ambil semua artikel, terbaru duluan
        return view('users.artikel', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.a_create_artikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Simpan gambar ke public/img_artikel
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img_artikel'), $fileName);

        Artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileName,
        ]);

        return redirect()->route('artikel.create')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Ambil artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Kirim artikel ke view temp_artikel
        return view('users.temp_artikel', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
