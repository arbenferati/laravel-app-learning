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
        $latest = Http::get('http://api.themoviedb.org/3/movie/latest?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
        return view('pages.application.movies.index', [
            'popular' => $popular,
            'upcoming' => $upcoming,
            'latest' => $latest,
        ]);
    }

    /**
     * Shows single movie page
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::get('http://api.themoviedb.org/3/movie/' . $id . '?api_key=' . config('services.tmdb.api') . '&language=en-US&append_to_response=videos,images,credits')->json();
        $similar = Http::get('http://api.themoviedb.org/3/movie/' . $id . '/similar?api_key=' . config('services.tmdb.api') . '&language=en-US')->json();
 
        return view('pages.application.movies.single', [
            'movie' => $movie,
            'videos' => $movie['videos']['results'],
            'credits' => $movie['credits'],
            'similar' => $similar,
        ]);
    }

    public function search(Request $request)
    {
        $movies =  Http::get('http://api.themoviedb.org/3/search/movie?api_key=' . config('services.tmdb.api') . '&language=en-US&include_adult=false&query=' . $request->search_movie)->json();
        return view('pages.application.movies.index', ['search_result' => $movies]);
    }

}
