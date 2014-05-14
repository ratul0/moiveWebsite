<?php

// for guest only
Route::group(array('before' => 'guest'), function()
{

	Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));
	Route::post('login', array('uses' => 'UserController@doLogin'));
	Route::get('register', array('as' => 'register', 'uses' => 'UserController@register'));
	Route::post('register', array('uses' => 'UserController@doRegister'));
});

// for any logged in user
Route::group(array('before' => 'auth'), function()
{
	Route::get('movies/show/{id}', array('as' => 'movie.show', 'uses' => 'MoviesController@show'));
	Route::get('movies', array('as' => 'movie.index', 'uses' => 'MoviesController@index'));
	Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));
});

// for user
Route::group(array('before' => 'auth|user'), function()
{
	
});


// for admin
Route::group(array('before' => 'auth|admin'), function()
{
	Route::get('home', array('as' => 'home', 'uses' => 'UserController@home'));
	Route::get('genres', array('as' => 'genre.index', 'uses' => 'GenreController@index'));
	
	Route::get('movies/create', array('as' => 'movie.create', 'uses' => 'MoviesController@create'));
	Route::post('movies/create', array('uses' => 'MoviesController@store'));
});



// public pages [ keep them at last]
Route::get('/', array('as' => 'guest', 'uses' => 'UserController@guest'));