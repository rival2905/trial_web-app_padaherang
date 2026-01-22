<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $items = Galeri::with('kategori')->get();
        return view('admin.galeri.index', compact('items'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.galeri.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'       => 'required|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar'      => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $pathGambar = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'judul'       => $request->judul,
            'kategori_id' => $request->kategori_id,
            'gambar'      => $pathGambar
        ]);

        return redirect()->route('galeri')
            ->with('success', 'Data galeri berhasil disimpan');
    }

    public function show($id)
    {
        $data = Galeri::with('kategori')->findOrFail($id);
        return view('admin.galeri.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Galeri::findOrFail($id);
        $kategoris = Kategori::all();

        return view('admin.galeri.edit', compact('data', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $data = Galeri::findOrFail($id);

        $request->validate([
            'judul'       => 'required|max:255',
            'kategori_id' => 'required|exists:kategoris,id',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($data->gambar);
            $data->gambar = $request->file('gambar')->store('galeri', 'public');
        }

        $data->judul = $request->judul;
        $data->kategori_id = $request->kategori_id;
        $data->save();

        return redirect()->route('galeri')
            ->with('success', 'Data galeri berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Galeri::findOrFail($id);
        
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($data->gambar);
        
        // Hapus data dari database
        $data->delete();
        
        return redirect()->route('galeri')
            ->with('success', 'Data galeri berhasil dihapus');
    }
}