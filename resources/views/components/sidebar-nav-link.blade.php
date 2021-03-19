@props(['first', 'last', 'active', 'disconnect'])

@php

$classes = ($active ?? false)
    ? 'text-center bg-gray-700 border-b-4 border-blue-300 py-6 hover:bg-gray-700 min-w-full'
    : 'text-center bg-gray-800 py-6 hover:bg-gray-700 hover:border-blue-300 min-w-full';

$classes .= ($first ?? false)
    ? ' rounded-t-lg'
    : '';

$classes .= ($last ?? false)
    ? ' rounded-b-lg'
    : '';

@endphp

@if ($disconnect ?? false)
    @php
        $classes .= ' border-b-8 border-red-300';
        $classes = str_replace('hover:border-blue-300', 'hover:border-red-300', $classes);
    @endphp
@endif

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
