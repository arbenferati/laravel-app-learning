<div class="mt-2 rounded-xl overflow-hidden shadow bg-gray-800 text-gray-50">
    <a href="{{ url('/app/movies' . '/' . $movie['id']) }}">
        @if ($movie['poster_path'] == null)
            <img class="h-full hover:opacity-80 transition" src="{{ asset('/images/noimage.png') }} ">
        @else
            <img class="h-full hover:opacity-80 transition" src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }} ">
        @endif
    </a>
    <div class="p-4">
        <p class="text-lg font-semibold truncate"><a href="{{ url('/app/movies' . '/' . $movie['id']) }}">{{ $movie['title'] }}</a></p>
        <p class="flex flex-col py-2 ">
            <span class="mb-2 text-xs text-gray-500">@isset($movie['release_date']) {{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }} @endisset </span>
            <span class="font-semibold">{{ $movie['vote_average'] }}/10 <span class="text-xs">({{ $movie['vote_count'] }} votes)</span></span>
        </p>
    </div>
</div>