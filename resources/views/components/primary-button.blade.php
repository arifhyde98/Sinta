<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center gap-2 rounded-xl border border-transparent bg-blue-900 px-4 py-2.5 text-xs font-semibold uppercase tracking-widest text-white shadow-lg shadow-blue-900/20 transition duration-200 hover:-translate-y-0.5 hover:bg-blue-800 focus:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 active:translate-y-0 active:bg-blue-950 disabled:cursor-not-allowed disabled:opacity-60']) }}>
    {{ $slot }}
</button>
