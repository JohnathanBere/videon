<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table = 'movies';
	protected $fillable = ['name', 'category_id', 'director', 'genre', 'synopsis', 'price', 'main_image'];

	protected $hidden = [];

	public function category() {
		return $this->belongsTo('App\Category');
	}

}
