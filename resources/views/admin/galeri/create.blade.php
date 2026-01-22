<!DOCTYPE html>
<html>
<head>
    <title>Tambah Galeri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Galeri Baru</h3>

    <form action="{{ route('galeri.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text"
                   name="judul"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Kategori Foto</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori Foto --</option>
                @foreach($kategoris as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Upload Foto</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/galeri" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>