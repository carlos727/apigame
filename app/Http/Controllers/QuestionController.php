<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;

use DB;
use Response;
use Validator;

class QuestionController extends Controller
{
    public function all() {
		//Code...
	}

	public function show() {

		return view('questions');
	}

	public function store(Request $request) {
		//Code...
	}

	public function delete($id){
		//
	}

	public function update($id, Request $request){
		//
	}

	public function questionsBySubject($subject) {
		//Code...
	}
}
