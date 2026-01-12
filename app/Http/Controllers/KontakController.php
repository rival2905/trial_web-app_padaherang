<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);

        // Di sini Anda bisa menyimpan ke database atau kirim email
        // Contoh: Mail::to('admin@website.com')->send(new KontakMail($validated));

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}