<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'subject',
		'time',
		'complexity',
		'statement',
		'opA',
		'opB',
		'opC',
		'opD',
		'opOK',
	];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
	protected $hidden = [
		'created_at',
		'updated_at'
	];
}
