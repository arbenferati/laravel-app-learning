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
        $popular = Http::get('http://api.themoviedb.org/3/movie/popular?api_key=' . config('services.tmdb.api') . '&language=fr-FR')->json();
        $upcoming = Http::get('http://api.themoviedb.org/3/movie/upcoming?api_key=' . config('services.tmdb.api') . '&language=fr-FR')->json();
        return view('pages.application.movies.movies', ['popular_movies' => $popular, 'upcoming_movies' => $upcoming]);
    }

    public function single($id)
    {
        $movie = Http::get('http://api.themoviedb.org/3/movie/' . $id . '?api_key=' . config('services.tmdb.api') . '&language=fr-FR')->json();
        return view('pages.application.movies.single', ['movie' => $movie]);
    }

    public function search(Request $request)
    {
        $movies =  Http::get('http://api.themoviedb.org/3/search/movie?api_key=' . config('services.tmdb.api') . '&language=fr-FR&include_adult=false&query=' . $request->search_movie)->json();
        return view('pages.application.movies.movies', ['search_result' => $movies]);
    }

}
