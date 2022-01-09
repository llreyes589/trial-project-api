<?php

namespace App\Http\Controllers;
use \App\Models\Movie;

class MovieController extends Controller
{
    public function showAllMovies(){
        return response()->json(Movie::orderBy('id', 'desc')->get());
    }
    
    public function store(){
        $movie = Movie::create(\request()->all());
        return $movie;
    }

    public function delete($id)
    {
        Movie::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    
    public function showMovie($id)
    {
        
        return Movie::findOrFail($id);
    }

    public function update($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update(\request()->all());
        return $movie;
    }

    public function sortMovies(){
        return Movie::orderBy('released_dt', \request()->order)->get();
    }
}
