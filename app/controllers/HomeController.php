<?php

class HomeController extends BaseController {

	public function __construct()
	{
		 $this->beforeFilter('auth');
	}

	public function showWelcome()
	{
		$count = DB::table('counters')->count();
		return View::make('home')->with('count',$count);
	}
	public function counter()
	{
		$count = DB::table('counters')->insert(array('count'=>1));
		return Response::json(array('success'=>'success'));
	}

}
