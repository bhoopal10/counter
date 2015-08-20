<?php

class AccountController extends BaseController {

	public function getLogin()
	{
		return View::make('account.login');
	}
	public function postLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::intended('/');
		}
		else
		{
			return Redirect::back()->with('error',"invalid username or password");
		}

	}


}
