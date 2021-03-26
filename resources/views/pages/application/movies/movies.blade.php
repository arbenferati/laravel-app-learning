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
        <h1 class="text-2xl text-gray-900 px-8 pt-8">Search result</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start">
            @foreach ($search_result['results'] as $movie)
            <div class="mt-2 rounded-t-xl overflow-hidden shadow">
                <a href="{{ url('/app/movies' . '/' . $movie['id']) }}">
                    <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }} " alt="" srcset="">
                </a>
                <div class="p-4">
                    <p class="text-lg font-semibold truncate"><a href="{{ url('/app/movies' . '/' . $movie['id']) }}">{{ $movie['title'] }}</a></p>
                    <p class="flex flex-col py-2 ">
                        <span class="mb-2 text-xs text-gray-500">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="font-semibold">{{ $movie['vote_average'] }}/10 <span class="text-xs">({{ $movie['vote_count'] }} votes)</span></span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        @endisset

        @isset($popular_movies)
        <h1 class="text-2xl text-gray-900 px-8 pt-8">Top rated movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start mt-6">
            @foreach ($toprated_movies['results'] as $movie)
            <div class="mt-2 rounded-t-xl overflow-hidden shadow">
                <a href="{{ url('/app/movies' . '/' . $movie['id']) }}">
                    <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }} " alt="" srcset="">
                </a>
                <div class="p-4">
                    <p class="text-lg font-semibold truncate"><a href="{{ url('/app/movies' . '/' . $movie['id']) }}">{{ $movie['title'] }}</a></p>
                    <p class="flex flex-col py-2 ">
                        <span class="mb-2 text-xs text-gray-500">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="font-semibold">{{ $movie['vote_average'] }}/10 <span class="text-xs">({{ $movie['vote_count'] }} votes)</span></span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Upcoming movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start mt-6">
            @foreach ($upcoming_movies['results'] as $movie)
            <div class="mt-2 rounded-t-xl overflow-hidden shadow">
                <a href="{{ url('/app/movies' . '/' . $movie['id']) }}">
                    <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }} " alt="" srcset="">
                </a>
                <div class="p-4">
                    <p class="text-lg font-semibold truncate"><a href="{{ url('/app/movies' . '/' . $movie['id']) }}">{{ $movie['title'] }}</a></p>
                    <p class="flex flex-col py-2 ">
                        <span class="mb-2 text-xs text-gray-500">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="font-semibold">{{ $movie['vote_average'] }}/10 <span class="text-xs">({{ $movie['vote_count'] }} votes)</span></span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Popular movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-8 gap-8 p-8 items-start">
            @foreach ($popular_movies['results'] as $movie)
            <div class="mt-2 rounded-t-xl overflow-hidden shadow">
                <a href="{{ url('/app/movies' . '/' . $movie['id']) }}">
                    <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }} " alt="" srcset="">
                </a>
                <div class="p-4">
                    <p class="text-lg font-semibold truncate"><a href="{{ url('/app/movies' . '/' . $movie['id']) }}">{{ $movie['title'] }}</a></p>
                    <p class="flex flex-col py-2 ">
                        <span class="mb-2 text-xs text-gray-500">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="font-semibold">{{ $movie['vote_average'] }}/10 <span class="text-xs">({{ $movie['vote_count'] }} votes)</span></span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        @endisset
    </x-slot>
</x-app-layout>
