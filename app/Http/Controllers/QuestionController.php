<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Subject;

use DB;
use Response;
use Validator;

class QuestionController extends Controller
{
    public function all() {

		$questions = DB::table('questions')
					->select('id', 'subject', 'time', 'complexity', 'statement', 'opA','opB', 'opC', 'opD', 'opOK')
					->orderBy('subject', 'asc')
					->orderBy('complexity', 'asc')
					->get();

		return Response::json($questions);

	}

	public function show() {

		$questions = Question::orderBy('subject', 'asc')
								->orderBy('complexity', 'asc')
								->get();

		$subjects = Subject::select('name')
					->orderBy('name', 'asc')
					->get();

		$array = array();
		foreach ($subjects as $subject) {
			$array[$subject->name] = $subject->name;
		}


		$class = [
			'subjects'		=>	'',
			'questions'		=>	'activeli'
		];

		return view('questions', [
			'questions'	=> $questions,
			'subjects'	=> $array,
			'class'		=> $class
		]);

	}

	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'subject'	=> 'required',
			'complexity'=> 'required',
			'statement'	=> 'required',
			'opA'		=> 'required',
			'opB'		=> 'required',
			'opC'		=> 'required',
			'opD'		=> 'required',
			'opOK'		=> 'required'
		]);

		if ($validator->fails()) {

			return redirect()
					->action('QuestionController@show')
					->withErrors($validator->errors());
		}

		if ($request->input('complexity') == 1) {
			$time = 30;
		} else {
			if ($request->input('complexity') == 2) {
				$time = 60;
			} else {
				$time = 90;
			}
		}

		$question = new Question;
		$question->subject = $request->input('subject');
		$question->time = $time;
		$question->complexity = $request->input('complexity');
		$question->statement = $request->input('statement');
		$question->opA = $request->input('opA');
		$question->opB = $request->input('opB');
		$question->opC = $request->input('opC');
		$question->opD = $request->input('opD');
		$question->opOK = $request->input('opOK');
		$question->save();

		return redirect()->action('QuestionController@show');

	}

	public function delete($id){
		//
	}

	public function update($id, Request $request){
		//
	}

	public function questionsBySubject($subject) {

		$questions = DB::table('questions')
					->select('id', 'subject', 'time', 'complexity', 'statement', 'opA','opB', 'opC', 'opD', 'opOK')
					->where('subject','=', $subject)
					->orderBy('complexity', 'asc')
					->get();

		return Response::json($questions);

	}

}
