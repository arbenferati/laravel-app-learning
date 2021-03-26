<x-app-layout>
    <x-slot name="slot">
        <div class="p-4 flex flex-row items-start">
            <img class="h-full mb-4 rounded-l-2xl border border-r-8 border-gray-900" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="" srcset="">
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
            </div>
            <img class="h-full mb-4 rounded shadow-xl" src="https://image.tmdb.org/t/p/w500/{{ $movie['backdrop_path'] }}" alt="" srcset="">
        </div>
    </x-slot>
</x-app-layout>
