@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Galeri</h1>

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label><input type="file" name="gambar" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Upload
        </button>
    </form>
</div>
@endsection

            