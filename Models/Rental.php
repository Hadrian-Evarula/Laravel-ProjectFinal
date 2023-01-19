<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

    protected $fillable = [
        'user_id',
        'movie_name',
        'rental_date',
        'rental_expiry',
        'total_cost'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    use HasFactory;
}
