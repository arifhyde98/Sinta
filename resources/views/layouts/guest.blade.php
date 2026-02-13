<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Plus Jakarta Sans', sans-serif; }
        </style>
    </head>
    <body class="antialiased text-gray-900">
        <div class="relative min-h-screen flex items-center justify-center px-4 py-10">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Government Office" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-900/70"></div>
            </div>

            <div class="relative w-full max-w-md">
                <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/40 bg-white/95 backdrop-blur-xl">
                    <div class="h-1.5 bg-gradient-to-r from-blue-900 via-blue-800 to-yellow-400"></div>
                    <div class="px-8 py-8 sm:px-10">
                        {{ $slot }}
                    </div>
                </div>
                <p class="mt-6 text-center text-xs text-blue-100/90">
                    &copy; {{ date('Y') }} Pemerintah Kabupaten Donggala
                </p>
            </div>
        </div>
    </body>
</html>
