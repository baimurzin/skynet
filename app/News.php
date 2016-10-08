<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	const AUTH_NEWS = 0,
		ALL_NEWS = 1;

	protected $table = 'news';
	protected $fillable = ['text', 'title'];



}