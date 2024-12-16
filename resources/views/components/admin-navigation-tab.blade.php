@props(['href', 'active' => false])

@php
    $classes = $active
        ? 'text-primary-superdark scale-110 font-semibold'
        : 'text-gray-500 hover:text-primary-superdark transition-all duration-500';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
