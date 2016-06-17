<?php

class SessionsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	

	
	public function create()
	{
	
		
		if(Auth::check())
			return Redirect::to('/administrator/menu');
		else
			return View::make('admin.login');
	
	
	}
	
	public function logoutuser()
	{
		
		//Auth::logout();
		return View::make('admin.login');
	}
	
	
	public function store()
	{
		
		
		
		 $user = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);
		
		
		
		
		if(Auth::attempt($user))
		{
			return Redirect::to('/administrator/menu');
		
		}else
			return Redirect::to('/admin');
		
	
	}


	
}
