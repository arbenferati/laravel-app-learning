<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular = Http::get('http://api.themoviedb.org/3/movie/popular?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        $upcoming = Http::get('http://api.themoviedb.org/3/movie/upcoming?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        $toprated = Http::get('http://api.themoviedb.org/3/movie/top_rated?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        return view('pages.application.movies.movies', [
            'popular_movies' => $popular,
            'upcoming_movies' => $upcoming,
            'toprated_movies' => $toprated,
        ]);
    }

    public function single($id)
    {
        $movie = Http::get('http://api.themoviedb.org/3/movie/' . $id . '?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        $credits = Http::get('http://api.themoviedb.org/3/movie/' . $id . '/credits?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        $similar = Http::get('http://api.themoviedb.org/3/movie/' . $id . '/similar?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        return view('pages.application.movies.single', [
            'movie' => $movie,
            'credits' => $credits,
            'similar' => $similar,
        ]);
    }

    public function search(Request $request)
    {
        $movies =  Http::get('http://api.themoviedb.org/3/search/movie?api_key=' . config('services.tmdb.api') . '&language=en-US&include_adult=false&query=' . $request->search_movie)->json();
        return view('pages.application.movies.movies', ['search_result' => $movies]);
    }

}
