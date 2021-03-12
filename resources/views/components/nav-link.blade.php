@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-6 text-gray-300 hover:text-gray-500 font-bold transition duration-150 ease-in-out'
            : 'mr-6 hover:text-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
