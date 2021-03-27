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