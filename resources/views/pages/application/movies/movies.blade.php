<x-app-layout>
    <x-slot name="slot">

        <!-- search bar -->

        <div class="w-full h-auto bg-white rounded-2xl shadow-xl p-6 m-6">
            <!-- Validation Errors -->
            @if (session('error'))
                <div class="p-2 bg-red-300 border-t-4 border-red-900">
                    <p class="text-lg">{{ session('error') }}</p>

                </div>
            @endif
            <form method="POST" action="">
                @csrf
                <!-- Search bar -->
                <div class="mt-4">
                    <x-label for="search" :value="__('Search a movie')" />
                    <x-input id="search_id" class="block mt-1 w-full" type="text" name="search" required />
                </div>
                <div class="flex items-center justify-start mt-4">
                    <x-button class="ml-3">
                        {{ __('Search') }}
                    </x-button>
                </div>
            </form>
        </div>
        @isset($movies)
        <div class="p-8 flex flex-row flex-wrap w-xl items-center justify-start">
            @foreach ($movies['results'] as $movie)
                <div class="bg-gray-800 w-full m-2 rounded-lg overflow-hidden flex justify-around">
                    <img class="h-full w-96 object-cover" src="https://image.tmdb.org/t/p/w500/{{ $movie['backdrop_path'] }} " alt="" srcset="">
                    <div class="p-2 flex-1">
                        <p class="text-2xl font-semibold truncate">
                            {{ $movie['title'] }}
                        </p>
                        <p class="text-xs text-gray-400"> </p>
                    </div>
                </div>
            @endforeach
        </div>
        @endisset
    </x-slot>
</x-app-layout>
