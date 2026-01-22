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

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('images/kegiatan1.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5>Penyerahan Siswa PKL</h5>
                    <p>
                        Kegiatan Penyerahan Siswa Praktik kerja Lapangan(PKL) 
                        Dilaksanakan Pada Hari Selasa 18 November 2025 Bertempat 
                        Di Dinas Bina Marga Dan Penataan Ruang.
                    </p>

                    <!-- TOMBOL EDIT -->
                    <a href="/galeri/edit/1" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('images/kegiatan2.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <h5>Explorasi Github</h5>
                    <p>
                        Kegiatan Mempelajari Penggunaan Repository, 
                        Upload File Project Dan Pengelolaan Code Sumber.
                    </p>

                    <!-- TOMBOL EDIT -->
                    <a href="/galeri/edit/2" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('images/kegiatan3.jpeg') }}" class="card-img-top">
                <div class="card-body">
                    <h5>Tes Pemahaman</h5>
                    <p>
                        Kegiatan Tes Pemahaman Mengenai Bisnis Proses.
                    </p>

                    <!-- TOMBOL EDIT -->
                    <a href="/galeri/edit/3" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
