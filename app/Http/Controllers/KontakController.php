<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // ✨ wajib ditambahkan supaya Siswa dikenali
use App\Models\Contact; 

class KontakController extends Controller
{
    public function index($id = null)
    {
        $siswa = Siswa::all(); // daftar semua siswa
        $detail = $id ? Siswa::findOrFail($id) : null;

        $items = [ 
            (object) ['name' => 'Zahra Sulha Nurul Al Sifah','nis' => 232410250,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Kalipucang','whatsapp' => '082115166288','email' => '232410250@smkn1padaherang.sch.id','instagram' => '@fassyifaa','image' => 'images/zahra.jpg'],
            (object) ['name' => 'Riskia Wulan','nis' => 232410246,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Padaherang','whatsapp' => '087868236300','email' => '232410246@smkn1padaherang.sch.id','instagram' => '@rskiawlan_','image' => 'images/riskia.jpg'],
            (object) ['name' => 'Nadin Nadiati','nis' => 232410237,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Banjarsari','whatsapp' => '085135252494','email' => '232410237@smkn1padaherang.sch.id','instagram' => '@nadinadiaaa__','image' => 'images/nadin.jpg'],
            (object) ['name' => 'Resti Rindiyani','nis' => 232410250,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Kalipucang','whatsapp' => '082317319553','email' => '232410245@smkn1padaherang.sch.id','instagram' => '@rereeyrn','image' => 'images/resti.jpg'],

        ];
        //   dd($items);
        return view('kontak', compact('siswa', 'detail','items'));
    }
    public function detail_biodata($name)
    {
        $items = [ 
            (object) ['name' => 'Zahra Sulha Nurul Al Sifah','nis' => 232410250,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Kalipucang','whatsapp' => '082115166288','email' => '232410250@smkn1padaherang.sch.id','instagram' => '@fassyifaa','image' => 'images/zahra.jpg'],
            (object) ['name' => 'Riskia Wulan','nis' => 232410246,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Padaherang','whatsapp' => '087868236300','email' => '232410246@smkn1padaherang.sch.id','instagram' => '@rskiawlan_','image' => 'images/riskia.jpg'],
            (object) ['name' => 'Nadin Nadiati','nis' => 232410237,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Banjarsari','whatsapp' => '085135252494','email' => '232410237@smkn1padaherang.sch.id','instagram' => '@nadinadiaaa__','image' => 'images/nadin.jpg'],
            (object) ['name' => 'Resti Rindiyani','nis' => 232410250,'jurusan' => 'Pengembangan Perangkat Lunak Dan Gim','asal_sekolah' => 'SMKN 1 PADAHERANG','alamat' => 'Kalipucang','whatsapp' => '082317319553','email' => '232410245@smkn1padaherang.sch.id','instagram' => '@rereeyrn','image' => 'images/resti.jpg'],

        ];
        $data = null;
        // dd($items);
        foreach($items as $item){
            if(stripos($item->name,$name) !== false){
                $data = $item;
                break;
            }
        }
        // dd($data);

        return view('detail_kontak', compact('data'));
    }
    public function index_two(){
        $items = Contact::get();
        return view('admin.contact.index', compact('items'));
    }
    public function detail_two($id){
        $data = Contact::find($id);
        // dd($data);
        return view('admin.contact.show', compact('data'));
    }
    public function create(){
       
        return view('admin.contact.form');
    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'nis' => 'required'
    ]);

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'nis' => $request->nis
    ]);

    return redirect()->route('contact');
}

public function edit($id)
{
    $data = Contact::findOrFail($id);
    return view('admin.contact.edit', compact('data'));
}

public function update(Request $request, $id)
{
    $contact = Contact::find($id);

    if (!$contact) {
        return redirect()->route('contact');
    }

    // UPDATE DATA
    $contact->update([
        'name'  => $request->name,
        'email' => $request->email,
        'nis'   => $request->nis
    ]);

    return redirect()->route('contact');
}
}