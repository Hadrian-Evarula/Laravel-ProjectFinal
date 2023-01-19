<?php

namespace App\Http\Controllers;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index() {

        return Rental::all();
    }

    public function store(Request $request)
    {
        return Rental::create([

            'user_id' => $request->user_id,
            'movie_name' => $request->movie_name,
            'rental_date' => $request->rental_date,
            'rental_expiry' =>$request->rental_expiry,
            'total_cost' => $request->total_cost
        ]);
    }

    public function show($id)
    {
        return Rental::findOrFail($id);
    }


    public function destroy($id)
    {
        return Rental::find($id)->delete();
    }


    public function update(Request $request, $id)
    {
        Rental::find($id)->update([
            'user_id' => $request->user_id,
            'movie_name' => $request->movie_name,
            'rental_date' => $request->rental_date,
            'rental_expiry' =>$request->rental_expiry,
            'total_cost' => $request->total_cost
        ]);
    }
}
