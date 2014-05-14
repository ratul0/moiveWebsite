<?php

// for guest only
Route::group(array('before' => 'guest'), function()
{

	Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));
	Route::post('login', array('uses' => 'UserController@doLogin'));
});

// for any logged in user
Route::group(array('before' => 'auth'), function()
{
	Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));
});

// for student
Route::group(array('before' => 'auth|user'), function()
{
	
});


// for admin
Route::group(array('before' => 'auth|admin'), function()
{
	Route::get('home', array('as' => 'home', 'uses' => 'UserController@home'));
});



// public pages [ keep them at last]
Route::get('/', array('as' => 'guest', 'uses' => 'UserController@guest'));