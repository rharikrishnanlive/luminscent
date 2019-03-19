<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		if($request->has('login')) {
			$valid = DB::table('users')
					->where('email', $request->get('email'))
					->first();
			if($valid->password === md5($request->get('password')) && $valid->user_type === 'user') {
				return redirect()->action('AuthController@user_dashboard');
			} 
			else if($valid->password === md5($request->get('password')) && $valid->user_type === 'admin'){
				return redirect()->action('AuthController@admin_dashboard');
			} else {
				return redirect()->back()->with('message','You are not a valid user');
			}
		} else {
			return view('login');
		}
	}

	public function register(Request $request)
	{
		if($request->has('register')) {
			$request->validate([
				'name' => 'required',
				'email' => 'required|unique:users',
				'password' => 'required|required_with:confirm_password|same:confirm_password',
				'confirm_password' => 'required'
			]);
			$user = new User();
			$user->name = $request->get('name');
			$user->email = $request->get('email');
			$user->password = md5($request->get('password'));
			$user->user_type = 'user';
			$user->save();
			return redirect()->action('AuthController@login');
		} else {
			return view('register');
		}
	}

	public function admin_dashboard(Request $request)
	{
		$users = DB::table('users')->where('user_type','!=','admin')->get();
		return view('admin_dashboard',compact('users'));
	}

	public function user_dashboard(Request $request)
	{
		return view('user_dashboard');
	}
}
