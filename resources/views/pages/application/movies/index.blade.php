<x-app-layout>
    <x-slot name="slot">

        <!-- Search bar -->
        <div class="w-full h-auto bg-white shadow rounded-tl-2xl p-6">
            <!-- Validation Errors -->
            @if (session('error'))
                <div class="p-2 bg-red-300 border-t-4 border-red-900">
                    <p class="text-lg">{{ session('error') }}</p>
                </div>
            @endif
            <form method="POST" action="{{ route('search_movie') }}">
                @csrf
                <div class="flex items-end">
                    <div class="flex-1">
                        <x-label for="search" :value="__('Search a movie')" />
                        <x-input id="search_id" class="block mt-1 w-full" type="text" name="search_movie" required />
                    </div>
                    <x-button class="ml-3 h-10"> {{ __('Search') }} </x-button>
                </div>
            </form>
        </div>

        @isset($search_result)
        @if ($search_result['results'])
        <h1 class="text-2xl text-gray-900 px-8 pt-8">Search result</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start">
            @foreach ($search_result['results'] as $movie)
                @if ($loop->index < 16)
                    <x-movie-card :movie="$movie" />
                @endif
            @endforeach
        </div>
        @else
            <div class="col-span-8 p-6 bg-red-100 text-red-600 text-4xl font-bold">
                No results found :(
            </div>
        @endif
        @endisset

        @isset($popular)
        <h1 class="text-2xl text-gray-900 px-8 pt-8">Top rated movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start mt-6">
            @foreach ($toprated['results'] as $movie)
                @if ($loop->index < 16)
                    <x-movie-card :movie="$movie" />
                @endif
            @endforeach
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Upcoming movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start mt-6">
            @foreach ($upcoming['results'] as $movie)
                @if ($loop->index < 16)
                    <x-movie-card :movie="$movie" />
                @endif
            @endforeach
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Popular movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start">
            @foreach ($popular['results'] as $movie)
                @if ($loop->index < 16)
                    <x-movie-card :movie="$movie" />
                @endif
            @endforeach
        </div>
        @endisset
    </x-slot>
</x-app-layout>
