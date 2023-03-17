@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['type' => 'checkbox', 'class' => 'rounded
border-gray-300 text-gold shadow-sm focus:ring-gold']) !!}>