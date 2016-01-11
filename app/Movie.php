<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table = 'movies';
	protected $fillable = ['name', 'category_id', 'director', 'genre', 'synopsis', 'price', 'main_image', '_image1', '_image2', '_image3'];

	protected $hidden = [];

	public function category() {
		return $this->belongsTo('App\Category');
	}

}
