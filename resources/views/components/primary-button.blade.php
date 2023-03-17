<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-dark border
    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gold
    active:bg-gold
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>