<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-100">
    @auth
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-8">
                    <span class="text-xl font-bold">My Website</span>
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg hover:bg-blue-500 transition {{ request()->routeIs('home') ? 'bg-blue-700' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('kontak') }}" class="px-3 py-2 rounded-lg hover:bg-blue-500 transition {{ request()->routeIs('kontak') ? 'bg-blue-700' : '' }}">
                        Kontak
                    </a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg hover:bg-blue-500 transition {{ request()->routeIs('about') ? 'bg-blue-700' : '' }}">
                        About
</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span>Halo !!</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 rounded-lg hover:bg-red-600 transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @endauth

    @if(session('success'))
    <div class="container mx-auto px-4 mt-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session('success') }}
        </div>
    </div>
    @endif

    @if($errors->any())
    <div class="container mx-auto px-4 mt-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>