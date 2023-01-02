@props(['status'])

@if ($status)
<div {{ $attributes->merge(['class' => 'font-bold text-sm']) }}>
    {{ $status }}
</div>
@endif