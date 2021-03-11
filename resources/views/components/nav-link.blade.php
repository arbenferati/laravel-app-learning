@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-6 text-gray-300 font-bold'
            : 'mr-6 hover:text-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
