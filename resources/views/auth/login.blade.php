<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-8 text-center">
        <div class="flex justify-center mb-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Lambang_Kabupaten_Donggala_%282015-sekarang%29.png" alt="Logo Kabupaten Donggala" class="h-20 w-auto drop-shadow-md transition-transform duration-300 hover:scale-105 sm:h-24">
        </div>
        <span class="inline-flex items-center rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-blue-800">
            Portal Resmi Donggala
        </span>
        <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-blue-950 sm:text-4xl">
            SINTA
        </h2>
        <p class="mt-2 text-sm text-slate-600">
            {{ __('Masuk ke Sistem Informasi Kabupaten Donggala') }}
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-slate-700" />
            <div class="relative mt-1">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                    @
                </span>
                <x-text-input id="email" class="block w-full rounded-xl border-slate-200 bg-white/90 pl-8 pr-4 text-sm text-slate-800 shadow-sm transition duration-200 placeholder:text-slate-400 focus:border-blue-700 focus:ring-blue-700" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="name@example.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" class="text-slate-700" />
                <button type="button" id="toggle-password" class="text-xs font-semibold text-blue-900 transition hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2">
                    Tampilkan
                </button>
            </div>
            <x-text-input id="password" class="mt-1 block w-full rounded-xl border-slate-200 bg-white/90 pr-4 text-sm text-slate-800 shadow-sm transition duration-200 placeholder:text-slate-400 focus:border-blue-700 focus:ring-blue-700"
                          type="password"
                          name="password"
                          required
                          autocomplete="current-password"
                          placeholder="********" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-blue-900 shadow-sm focus:ring-blue-700" name="remember">
                <span class="ms-2 text-sm text-slate-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-semibold text-blue-900 transition hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div class="pt-1">
            <x-primary-button class="group w-full justify-center rounded-xl border-0 bg-blue-900 py-3 text-sm font-bold tracking-wide text-white shadow-lg shadow-blue-900/25 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-800 focus:bg-blue-800">
                {{ __('Log in') }}
                <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">-&gt;</span>
            </x-primary-button>
        </div>

        <div class="text-center">
            <p class="text-sm text-slate-600">
                {{ __("Don't have an account?") }}
                <a href="{{ route('register') }}" class="font-semibold text-blue-900 transition hover:text-blue-700">
                    {{ __('Sign up') }}
                </a>
            </p>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('toggle-password');
            const password = document.getElementById('password');

            if (!toggle || !password) return;

            toggle.addEventListener('click', function () {
                const isPassword = password.type === 'password';
                password.type = isPassword ? 'text' : 'password';
                toggle.textContent = isPassword ? 'Sembunyikan' : 'Tampilkan';
            });
        });
    </script>
</x-guest-layout>
