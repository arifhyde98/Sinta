<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    {{-- HEADER --}}
    @include('admin.partials.header')

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        @include('admin.partials.sidebar')

        {{-- CONTENT --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

    {{-- FOOTER --}}
    @include('admin.partials.footer')

</body>
</html>
