@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Kontak Kami</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Informasi Kontak</h3>
            <div class="space-y-3">
                <p class="text-gray-600">📧 Email: info@website.com</p>
                <p class="text-gray-600">📱 Telepon: +62 812-3456-7890</p>
                <p class="text-gray-600">📍 Alamat: Bandung, Indonesia</p>
                <p class="text-gray-600">⏰ Jam Operasional: Senin - Jumat, 09:00 - 17:00</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Kirim Pesan</h3>
            <form action="{{ route('kontak.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Nama Anda">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Email Anda">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Pesan</label>
                    <textarea name="pesan" rows="4" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Tulis pesan Anda...">{{ old('pesan') }}</textarea>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200 font-semibold">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</div>
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Data Diri Peserta Praktik Kerja Lapangan(PKL)</h2>
      <p class="mt-6 text-lg/8 text-gray-600">Halaman ini memuat informasi identitas peserta Praktik Kerja Lapangan.</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      @foreach($items as $item)

      <li>
        <div class="flex items-center gap-x-6">
          <img src="{{ asset($item->image) }}" alt="" class="w-64 h-64 rounded-full outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><a href="{{route('kontak.detail',$item->name)}}">{{$item->name}}</a></h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Siswa</p>
          </div>
        </div>
      </li>

      @endforeach

      <li>
        <div class="flex items-center gap-x-6">
          <img src="{{ asset('images/nadin.jpg') }}" alt="" class="w-64 h-64 rounded-full outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><a href="{{route('kontak.detail','Nadin')}}">Nadin Nadiati</a></h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Siswa</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
         <img src="{{ asset('images/resti.jpg') }}" alt="" class="w-64 h-64 rounded-full outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><a href="/resti">Resti Rindiyani</a></h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Siswa</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="{{ asset('images/riskia.jpg') }}" alt="" class="w-64 h-64 rounded-full outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><a href="/riskia">Riskia Wulan</a></h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Siswa</p>
          </div>
        </div>
      </li>
      <li>
        <div class="flex items-center gap-x-6">
          <img src="{{ asset('images/zahra.jpg') }}" alt="" class="w-64 h-64 rounded-full outline-offset-1 outline-black/5" />
          <div>
            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900"><a href="/zahra">Zahra Sulha Nurul Al Sifah</h3>
            <p class="text-sm/6 font-semibold text-indigo-600">Siswa</p>
        </div>
      </li>
    </ul>
  </div>
</div>

@endsection