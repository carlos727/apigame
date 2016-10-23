<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'nickname',
		'id_user',
		'score'
	];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
	protected $hidden = [
		'created_at'
	];
}
