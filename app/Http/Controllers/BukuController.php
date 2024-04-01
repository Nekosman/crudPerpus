<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::with('kategori')->paginate(5);
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'nullable|date', // Validasi untuk tipe data date
            'id_kategori' => 'required',
            'id_peminjaman' => 'nullable',
        ]);

        // Konversi nilai 'tahun_terbit' ke dalam format date jika tidak null
        if ($validatedData['tahun_terbit'] !== null) {
            $validatedData['tahun_terbit'] = date('Y-m-d', strtotime($validatedData['tahun_terbit']));
        }

        Buku::create($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('buku.edit', compact('buku', 'kategoris'));
    }

    public function update(Request $request, Buku $buku)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'nullable|date', // Validasi untuk tipe data date
            'id_kategori' => 'required',
            'id_peminjaman' => 'nullable',
        ]);

        // Konversi nilai 'tahun_terbit' ke dalam format date jika tidak null
        if ($validatedData['tahun_terbit'] !== null) {
            $validatedData['tahun_terbit'] = date('Y-m-d', strtotime($validatedData['tahun_terbit']));
        }

        $buku->update($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }

    public function show(string $id_buku): View
    {
        //get post by ID
        $buku = buku::findOrFail($id_buku);

        //render view with post
        return view('buku.show', compact('buku'));
    }

}

