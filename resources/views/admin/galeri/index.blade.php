<!DOCTYPE html>
<html>
<head>
    <title>Galeri Kegiatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Website Saya</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/tentang">Tentang</a>
            <a class="nav-link" href="/kontak">Kontak</a>
            <a class="nav-link active" href="/galeri">Galeri</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h3 class="text-center mb-4">Galeri Kegiatan PKL</h3>

    <div class="row">
        @forelse ($items as $item)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top">

                    <div class="card-body text-center">
                        <h5>{{ $item->judul }}</h5>

                        <!-- Tombol Edit -->
                        <a href="{{ route('galeri.edit', $item->id) }}"
                           class="btn btn-warning btn-sm mt-2">
                            Edit
                        </a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('galeri.destroy', $item->id) }}" 
                              method="POST" 
                              style="display:inline-block;"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Belum ada data galeri</p>
        @endforelse
    </div>
</div>

</body>
</html>