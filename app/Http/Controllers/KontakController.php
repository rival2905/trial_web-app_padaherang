<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // ✨ wajib ditambahkan supaya Siswa dikenali

class KontakController extends Controller
{
    public function index($id = null)
    {
        $siswa = Siswa::all(); // daftar semua siswa
        $detail = $id ? Siswa::findOrFail($id) : null;

        $items = [ 
            (object) ['name'=>'Riskia Sulha Nurul Al Sifah', 'nis'=>232410250,'image'=>'images/zahra.jpg'], 
            (object) ['name'=>'Nadin Nadiati', 'nis'=>232410237,'image'=>'images/riskia.jpg']
        ];
        // dd($items);
        return view('kontak', compact('siswa', 'detail','items'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);

        // Simpan atau kirim email
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }

    public function detail_biodata($name)
    {
        $items = [ 
            (object) ['name'=>'Riskia Sulha Nurul Al Sifah', 'nis'=>232410250,'image'=>'images/zahra.jpg'], 
            (object) ['name'=>'Nadin Nadiati', 'nis'=>232410237,'image'=>'images/riskia.jpg']
        ];
        $data = null;

        foreach($items as $item){
            if(stripos($item->name,$name) !== false){
                $data = $item;
                break;
            }
        }
        // dd($data);

        return view('detail_kontak', compact('data'));
    }
}
