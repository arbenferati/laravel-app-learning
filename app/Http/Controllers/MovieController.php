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
        $movies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=' . config('services.tmdb.api'))->json();

        return view('pages.application.movies.movies', ['movies' => $movies]);
    }


}
