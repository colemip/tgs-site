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

// Route::get('/', function()
// {
	// return View::make('hello');
// });

Route::get('/', function()
{
	$view = View::make('index')->with('submitDate', "June 2, 2014");
    return $view;
});


Route::get('about', function() {
	return 'About!';
});

Route::get('submit', function() {    
	$view = View::make('submit')->with('submitDate', "June 2, 2014");
    // $view->with('user', User::find(1));
    return $view;
});

Route::get('2014', function() {
	return 'Coming Soon!';
});
