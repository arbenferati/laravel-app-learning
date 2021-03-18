@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-center bg-gray-700 border-r-4 border-blue-300 py-6 hover:bg-gray-700 min-w-full'
            : 'text-center bg-gray-800 py-6 hover:bg-gray-700 hover:border-r-4 hover:border-blue-300 min-w-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
