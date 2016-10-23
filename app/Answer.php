<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'id_question',
		'id_user',
		'answer'
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
