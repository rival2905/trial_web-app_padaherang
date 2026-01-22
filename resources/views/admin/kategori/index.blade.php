<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Kategori">
    <button class="btn btn-primary">Simpan</button>
</form>

<ul class="mt-3">
@foreach($kategoris as $kat)
    <li>{{ $kat->nama }}</li>
@endforeach
</ul>
