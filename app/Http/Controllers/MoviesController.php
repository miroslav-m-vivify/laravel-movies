<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use Carbon\Carbon;

class MoviesController extends Controller
{
    protected $latest_movies;

    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    public function create() {
        return view('movies.create');
    }

    public function store(Request $request) {
        $now = new Carbon();
        $year = $now->year;
        $rules = Movie::STORE_RULES;
        $rules['year'] = str_replace('$year', $year, $rules['year']);
    	$request->validate($rules);
    	$movie = Movie::create($request->all());
    	return view('movies.show', compact('movie'));
    }
}
