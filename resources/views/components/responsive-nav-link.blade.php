@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mt-6 hover:text-gray-300 underline transition duration-150 ease-in-out'
            : 'mt-6 hover:text-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
