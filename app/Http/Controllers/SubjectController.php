<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;

use DB;
use Response;
use Validator;

class SubjectController extends Controller {

    public function all() {

		$subjects = DB::table('subjects')
					->select('id', 'name', 'description')
					->orderBy('name', 'asc')
					->get();

		return Response::json($subjects);

	}

	public function show() {

		$subjects = Subject::orderBy('name', 'asc')->get();

		$class = [
			'subjects'		=>	'activeli',
			'questions'		=>	''
		];

		return view('subjects', [
			'subjects' => $subjects,
			'class' => $class
		]);

	}

	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'name'	=>	'required',
			'description'		=>	'required'
		]);

		if ($validator->fails()) {

			return redirect()
				->action('SubjectController@show')
				->withErrors($validator->errors());
		}

		$subject = new Subject;
		$subject->name = $request->input('name');
		$subject->description = $request->input('description');
		$subject->save();

		return redirect()->action('SubjectController@show');

	}

	public function delete($id){
		//
	}

	public function update($id, Request $request){
		//
	}
}
