<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'movie_name',
        'movie_genre',
        'country',
        'rental_cost',
        'rental_duration',
        'user_id',
    ];


    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
     }

     public function rentals()
     {
         return $this->belongsToMany(Rental::class);
     }

}
