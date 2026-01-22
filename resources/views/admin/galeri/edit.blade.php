<!DOCTYPE html>
<html>
<head>
    <title>Edit Galeri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Galeri</h3>

    <form action="{{ route('galeri.update', $data->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ $data->judul }}"
                   required>
        </div>

        <!-- ✅ KATEGORI FOTO -->
        <div class="mb-3">
            <label>Kategori Foto</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori Foto --</option>
                @foreach($kategoris as $kat)
                    <option value="{{ $kat->id }}"
                        {{ $data->kategori_id == $kat->id ? 'selected' : '' }}>
                        {{ $kat->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Foto Saat Ini</label><br>
            <img src="{{ asset('storage/'.$data->gambar) }}" width="200">
        </div>

        <div class="mb-3">
            <label>Ganti Foto</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/galeri" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
