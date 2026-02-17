<header class="bg-white border-b border-gray-200">
    <div class="px-6 py-4 flex items-center justify-between">
        <div>
            <p class="text-xs uppercase tracking-wide text-gray-500">Panel Admin</p>
            <h1 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>
        </div>

        <div class="flex items-center gap-3">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name ?? 'Admin' }}</p>
                <p class="text-xs text-gray-500">Administrator</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="inline-flex items-center rounded-md bg-gray-800 px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>
