<x-app-layout>
    <x-slot name="slot">
        <div class="p-4 flex flex-row items-start">
            <img class="w-96 h-full mb-4 shadow-md rounded-l-2xl border border-r-8 border-gray-900" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="" srcset="">
            <div class="px-8">
                <div class="mb-4">
                    <h1 class="text-3xl uppercase tracking-widest">
                        {{ $movie['title'] }}
                    </h1>
                    <span class="text-sm">Titre original: {{ $movie['original_title'] }} | Date de sortie : {{ Carbon\Carbon::parse($movie['release_date'])->format('d M Y') }}</span>
                    <br>
                    <span class="text-sm font-bold">
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if (!$loop->last) | @endif
                        @endforeach
                    </span>
                    <h2 class="italic text-lg">{{ $movie['tagline'] }}</h2>
                </div>
                <h2 class="text-lg uppercase text-gray-800 font-semibold">Synopsis</h2>
                <p class="tracking-wider mt-2">{{ $movie['overview'] }}</p>
                <x-button-link :link="__('/test')">
                    Watch trailer now
                </x-button-link>
            </div>
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Videos</h1>
        <div class="grid grid-cols-6 gap-8 px-8">
            @foreach ($videos as $video)
                @if ($loop->index < 5)
                    <div class="p-2 mr-4">
                        <iframe src="https://www.youtube.com/embed/{{ $video['key'] }}" 
                        frameborder="1"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    </div>
                @endif
            @endforeach
        </div>

        <h1 class="text-2xl text-gray-900 px-8 pt-8">Casting</h1>
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-8 p-8 items-start">
            @foreach ($credits['cast'] as $actor)
                @if ($loop->index < 6)
                    <div class="mt-2 rounded-t-xl overflow-hidden shadow">
                        <a href="{{ url('/app/movies/actors' . '/' . $actor['id']) }}">
                            @if ($actor['profile_path'] == null)
                                <img class="h-full hover:opacity-80 transition" src="{{ asset('/images/noimage.png') }} ">
                            @else
                                <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $actor['profile_path'] }} ">
                            @endif
                        </a>
                        <div class="p-4">
                            <p class="text-lg font-semibold truncate"> <a href="{{ url('/app/movies/actors' . '/' . $actor['id']) }}"> {{ $actor['name'] }} </a> </p>
                            <p class="flex flex-col py-2 "> Played as : <span class="mb-2 text-md text-gray-700">{{ $actor['character'] }}</span> </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        @if (count($similar['results']) > 0)
        <h1 class="text-2xl text-gray-900 px-8 pt-8">Similar movies</h1>
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 p-8 items-start">
            @foreach ($similar['results'] as $similar_movie)
                @if ($loop->index < 5)
                    <x-movie-card :movie="$similar_movie" />
                @endif
            @endforeach
        </div>
        @endif
    </x-slot>
</x-app-layout>
