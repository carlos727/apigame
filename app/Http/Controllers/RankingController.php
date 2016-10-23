<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Answer;

use DB;
use Response;

class RankingController extends Controller {

    public function all() {

		$rankings = DB::table('rankings')
					->select('id_user', 'nickname', 'score')
					->groupBy('id_user','nickname', 'score')
					->get();

		return Response::json($rankings);

	}

	public function store(Request $request) {

		if ($request->has('id_user') && $request->has('nickname') && $request->has('score')) {

			$ranking = new Ranking;
			$ranking->id_user = $request->input('id_user');
			$ranking->nickname = $request->input('nickname');
			$ranking->score = $request->input('score');
			$ranking->save();
			return response($ranking, 201);

		}

	}

	public function global() {

		$rankings = DB::table('rankings')
					->select('id_user', 'nickname', 'score')
					->orderBy('score', 'desc')
					->take(15)
					->get();

		return Response::json($rankings);

	}

	public function indiviual($id) {

		$rankings = DB::table('rankings')
					->select('id_user', 'nickname', 'score')
					->where('id_user','=', $id)
					->orderBy('score', 'desc')
					->take(15)
					->get();

		return Response::json($rankings);

	}

}
