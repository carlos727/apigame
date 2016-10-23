<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Answer;

use DB;
use Response;

class AnswerController extends Controller {

	public function all() {

		$answers = DB::table('answers')
					->select('id_user', 'id_question', 'answer')
					->groupBy('id_question','id_user', 'answer')
					->get();

		return Response::json($answers);

	}

	public function store(Request $request) {

		if ($request->has('id_user') && $request->has('id_question') && $request->has('answer')) {

			$answer = new Answer;
			$answer->id_user = $request->input('id_user');
			$answer->id_question = $request->input('id_question');
			$answer->answer = $request->input('answer');
			$answer->save();
			return response($answer, 201);

		}

	}

}
