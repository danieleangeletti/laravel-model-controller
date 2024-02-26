<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // I recover all the films, as if I were writing 'SELECT * FROM `movies`'
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('single_movie', compact('movie'));
    }
}
