<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIMANSET - Sistem Informasi Manajemen Aset Kabupaten Donggala</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Plus Jakarta Sans', sans-serif; }
            .hero-overlay { background: linear-gradient(to right, rgba(30, 58, 138, 0.9), rgba(30, 58, 138, 0.75)); }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-800">
        <!-- Navbar -->
        <nav class="fixed w-full z-50 transition-all duration-300 bg-white/90 backdrop-blur-md shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center gap-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Lambang_Kabupaten_Donggala_%282015-sekarang%29.png" alt="Logo" class="h-12 w-auto">
                        <div>
                            <h1 class="text-2xl font-bold text-blue-900 tracking-tight">SIMANSET</h1>
                            <p class="text-xs text-gray-500 font-medium tracking-wider">KABUPATEN DONGGALA</p>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-blue-900 hover:text-blue-700">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-semibold text-blue-900 hover:text-blue-700">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-5 py-2.5 text-sm font-semibold text-white bg-blue-900 rounded-full hover:bg-blue-800 transition shadow-lg shadow-blue-900/20">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative min-h-screen flex items-center justify-center pt-20">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Government Office" class="w-full h-full object-cover">
                <div class="absolute inset-0 hero-overlay"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-800/50 border border-blue-400/30 text-blue-100 text-sm font-medium mb-6 backdrop-blur-sm">
                    Official Portal of Donggala Regency
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                    Melayani dengan <span class="text-yellow-400">Integritas</span>,<br>
                    Bekerja dengan <span class="text-yellow-400">Hati</span>.
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto font-light">
                    Sistem Informasi Terpadu Pemerintah Kabupaten Donggala. Akses layanan publik dan informasi pemerintahan dalam satu pintu.
                </p>

                <!-- Search Bar -->
                <div class="max-w-3xl mx-auto bg-white p-2 rounded-full shadow-2xl flex items-center">
                    <div class="pl-6 text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" placeholder="Cari layanan atau informasi..." class="w-full px-4 py-3 text-gray-700 bg-transparent border-none focus:ring-0 text-lg placeholder-gray-400 rounded-full outline-none">
                    <button class="bg-blue-900 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-800 transition duration-300">
                        Cari
                    </button>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="py-24 bg-gray-50 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Layanan Utama</h2>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto rounded-full"></div>
                    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Akses cepat ke berbagai layanan publik yang disediakan oleh Pemerintah Kabupaten Donggala.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:-translate-y-2 transition duration-300 border-t-4 border-blue-900 group">
                        <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-900 transition duration-300">
                            <svg class="w-8 h-8 text-blue-900 group-hover:text-white transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Administrasi Kependudukan</h3>
                        <p class="text-gray-500 leading-relaxed">Layanan pengurusan KTP, KK, Akta Kelahiran, dan dokumen kependudukan lainnya secara online.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:-translate-y-2 transition duration-300 border-t-4 border-yellow-400 group">
                        <div class="w-14 h-14 bg-yellow-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-yellow-400 transition duration-300">
                            <svg class="w-8 h-8 text-yellow-600 group-hover:text-white transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Perizinan Usaha</h3>
                        <p class="text-gray-500 leading-relaxed">Kemudahan pengajuan izin usaha dan investasi melalui sistem pelayanan satu pintu yang transparan.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl shadow-gray-200/50 hover:-translate-y-2 transition duration-300 border-t-4 border-blue-900 group">
                        <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-900 transition duration-300">
                            <svg class="w-8 h-8 text-blue-900 group-hover:text-white transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Informasi Publik</h3>
                        <p class="text-gray-500 leading-relaxed">Akses berita terbaru, pengumuman resmi, dan transparansi anggaran pemerintah daerah.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-blue-900 text-white py-12 border-t border-blue-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Lambang_Kabupaten_Donggala_%282015-sekarang%29.png" alt="Logo" class="h-10 w-auto brightness-0 invert">
                            <span class="text-xl font-bold tracking-tight">SINTA</span>
                        </div>
                        <p class="text-blue-200 text-sm leading-relaxed max-w-md">
                            Sistem Informasi Terpadu Kabupaten Donggala. Mewujudkan pemerintahan yang bersih, transparan, dan melayani dengan sepenuh hati.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-yellow-400">Tautan Cepat</h4>
                        <ul class="space-y-2 text-sm text-blue-200">
                            <li><a href="#" class="hover:text-white transition">Beranda</a></li>
                            <li><a href="#" class="hover:text-white transition">Layanan</a></li>
                            <li><a href="#" class="hover:text-white transition">Berita</a></li>
                            <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-yellow-400">Hubungi Kami</h4>
                        <ul class="space-y-2 text-sm text-blue-200">
                            <li>Jl. Jati No. 1, Banawa</li>
                            <li>Kabupaten Donggala</li>
                            <li>Sulawesi Tengah</li>
                            <li>info@donggala.go.id</li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-blue-800 mt-12 pt-8 text-center text-sm text-blue-300">
                    &copy; {{ date('Y') }} Pemerintah Kabupaten Donggala. All rights reserved.
                </div>
            </div>
        </footer>
    </body>
</html>
