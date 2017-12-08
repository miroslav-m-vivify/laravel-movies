<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director' , 'year', 'storyline'];

    const STORE_RULES = [
    	'title' => 'required',
    	'genre' => 'required',
    	'director' => 'max: 25',
    	'year' => 'integer | between: 1900, $year',
    	'storyline' => 'max: 1000'
    ];
}
