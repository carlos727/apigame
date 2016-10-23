<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

use DB;
use Response;

class UserController extends Controller {

    public function all() {

		$users = DB::table('users')
					->select('id', 'name', 'nickname', 'email', 'password', 'birthday')
					->get();

		return Response::json($users);

	}

	public function store(Request $request) {

		if ($request->has('name') && $request->has('nickname') && $request->has('email') && $request->has('password') && $request->has('birthday')) {

			$user = new User;
			$user->name = $request->input('name');
			$user->nickname = $request->input('nickname');
			$user->email = $request->input('email');
			$user->password = $request->input('password');
			$user->birthday = $request->input('birthday');
			$user->save();
			return response($user, 201);

		}

	}

}
