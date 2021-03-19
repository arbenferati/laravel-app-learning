@props(['first', 'last', 'active', 'disconnect'])

@php
$tmp = '';
$classes = ($active ?? false)
            ? 'text-center bg-gray-700 border-r-4 border-blue-300 py-6 hover:bg-gray-700 min-w-full'
            : 'text-center bg-gray-800 py-6 hover:bg-gray-700 hover:border-blue-300 min-w-full';

($first ?? false)
            ? $classes .= ' rounded-t-lg'
            : $classes .= '';
($last ?? false)
            ? $classes .= ' rounded-b-lg'
            : $classes .= '';

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
