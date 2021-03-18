<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-900 text-gray-500 min-h-screen p-6 flex flex-col justify-between items-center">

        @include('layouts.partials.navigation')

        <main class="w-screen flex-grow flex flex-row">

            @include('layouts.partials.sidebar')

            <div class="flex-grow bg-gray-50 rounded-l-2xl flex flex-wrap flex-row justify-start">

                {{ $slot }}

            </div>

        </main>

        @include('layouts.partials.footer')

    </body>
</html>
