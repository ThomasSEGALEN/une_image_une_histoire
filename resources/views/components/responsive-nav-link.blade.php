@props(['active'])

@php
$classes = ($active ?? false)
? 'block w-full pl-3 pr-4 py-2 border-l-4 border-orange-300 text-left text-base font-medium text-orange bg-orange-50
focus:outline-none transition duration-150
ease-in-out'
: 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600
hover:text-orange-800 hover:bg-orange-50 hover:border-orange-300 focus:outline-none focus:text-orange-800
focus:bg-orange-50
focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>