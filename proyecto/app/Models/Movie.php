<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $primaryKey = 'movie_id';

    protected $fillable = ['title', 'price', 'release_date', 'synopsis'];

}
