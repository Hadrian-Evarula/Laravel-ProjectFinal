<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    public function index() {

        return Movie::all();
    }

    public function store(Request $request)
    {
        return Movie::create([

            'movie_name' => $request->movie_name,
            'movie_genre' => $request->movie_genre,
            'country' => $request->country,
            'rental_cost' =>$request->randomDigit,
            'rental_duration' => $request->randomNumber
        ]);
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }


    public function destroy($id)
    {
        return Movie::find($id)->delete();
    }


    public function update(Request $request, $id)
    {
        Movie::find($id)->update([
            'movie_name' => $request->movie_name,
            'movie_genre' => $request->movie_genre,
            'country' => $request->country,
            'rental_cost' =>$request->randomDigit,
            'rental_duration' => $request->randomNumber
        ]);
    }

}
