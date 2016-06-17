<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::controller('{lang}/home', 'HomeController');
Route::controller('{lang}/home/content/{title}', 'HomeController');
Route::controller('{lang}/home/contact', 'HomeController');

//Route::controller('admin', 'Admin2AdminController');


Route::controller('administrator', 'AdminAdminController');


Route::get('admin', 'SessionsController@create');
Route::get('logout', 'SessionsController@logoutuser');

Route::post('checklogin', 'SessionsController@store');

//Route::get('/', 'HomeController');


//Route::controller(Controller::detect());


/*
Route::get('/', function()
{
	//return View::make('hello');
	
	return "eeee";
	
});


Route::get('cats/{id}', function($id){
  return "Cat #$id";
})->where('id','[0-9]+');


*/