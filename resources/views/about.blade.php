@extends('layouts.app')

@section('title', 'About Aplikasi')

@section('content')
<div class="min-h-screen bg-gray-100 py-12 px-4">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8">

        
        <!-- Header -->
        <div class="flex items-center gap-4 mb-6">
            <div class="bg-blue-100 p-3 rounded-full">
                📘
            </div>
            <h1 class="text-3xl font-bold text-gray-800">
                About Aplikasi
            </h1>
        </div>

        <!-- Content -->
        <div class="text-gray-700 leading-relaxed space-y-4">
            <h2 class="text-xl font-semibold text-gray-800">
                Tentang Aplikasi
            </h2>

            <p>
                Aplikasi ini dibuat untuk menampilkan informasi data diri peserta
                Praktik Kerja Lapangan (PKL) serta memfasilitasi pengiriman pesan
                atau pertanyaan dari pengguna.
            </p>

            <p>
                Melalui aplikasi ini, pengguna dapat melihat profil peserta PKL
                dan menghubungi pengelola melalui fitur kontak yang tersedia.
            </p>

            <p>
                Aplikasi ini dikembangkan berbasis website menggunakan
                <span class="font-semibold text-blue-600">Laravel</span>
                dengan tujuan mempermudah pengelolaan data, meningkatkan efisiensi
                komunikasi, serta sebagai sarana pembelajaran pengembangan web.
            </p>
        </div>

        <!-- Button -->
        <div class="mt-8">
            <a href="/"
               class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg
                      hover:bg-blue-600 transition font-semibold">
                Kembali ke Beranda
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-10 text-center text-sm text-gray-500">
            © 2024 Aplikasi PKL SMK
        </div>
    </div>
</div>
@endsection
