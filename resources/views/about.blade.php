@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-4 text-gray-800">Selamat Datang</h1>
    <p class="text-gray-600 text-lg mb-4">
        Ini adalah halaman about dari website Anda.
    </p>
    
    <div class="bg-blue-50 p-6 rounded-lg">
        <h2 class="text-2xl font-semibold mb-3 text-blue-800">Informasi</h2>
        <p class="text-gray-700">
            Website ini memiliki fitur login, navigasi antar halaman, dan logout. 
            Anda dapat menggunakan menu navigasi di bagian atas untuk berpindah halaman.
        </p>
    </div>

</div>
@endsection