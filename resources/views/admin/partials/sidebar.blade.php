<aside class="w-64 bg-gray-900 text-gray-100 min-h-full">
    <div class="px-5 py-4 border-b border-gray-800">
        <h2 class="text-lg font-semibold">Admin Menu</h2>
        <p class="text-xs text-gray-400 mt-1">Navigasi utama sistem</p>
    </div>

    <nav class="p-4 space-y-1">
        <a href="{{ route('dashboard') }}"
           class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            Dashboard
        </a>

        <a href="{{ route('profile.edit') }}"
           class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('profile.*') ? 'bg-gray-800 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
            Profil
        </a>
    </nav>
</aside>
