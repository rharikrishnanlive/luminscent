<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		return view('login');
	}

	public function register(Request $request)
	{
		if($request->has('register')) {
			$user = new User();
			$user->name = $request->get('name');
			$user->email = $request->get('email');
			$user->password = md5($request->get('password'));
			$user->user_type = 'user';
			$user->save();
			return redirect()->back();
		} else {
			return view('register');
		}
	}
}
