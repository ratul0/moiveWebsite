<?php

class MoviesController extends \BaseController {

	private function embade($id){
		$name = Movie::where('id','=',$id)->first()->movie_url;
		$start = stripos($name,'=');

		return substr($name,$start+1);
	}

	/**
	 * Display a listing of the resource.
	 * GET /movies
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('movies.index')
						->with('movies',Movie::all())
						->with('title', 'All Movies');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /movies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('movies.create')
						->with('genre',Genre::all()->lists('genre','id'))
						->with('title', 'Add New Movies');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /movies
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'genre'				=>	'required',
			'movie'       =>	'required',
			'description'        =>	'required',
			'url' 		   =>	'required|url',
			'age' 			=> 'required|numeric'
		];

		$validation = Validator::make(Input::all(), $rules);
		
		if($validation->fails()){
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{
			$movie            = new Movie();
			$movie->genre_id = Input::get('genre');
			$movie->moive_name = Input::get('movie');
			$movie->description = Input::get('description');
			$movie->movie_url     = Input::get('url');
			$movie->age   = Input::get('age');
 
			if($movie->save())
			{

				
			    return Redirect::route('movie.index')
			    					->with('success', "Movie added successfully.");
			}
			else
				return Redirect::back()
									->withInput()
									->with('error', 'Some error occured. Try again.');
		}
			


	}

	/**
	 * Display the specified resource.
	 * GET /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// dd($this->embade($id));
		return View::make('movies.show')
						->with('embade',$this->embade($id))
						->with('movie',Movie::where('id','=',$id)->first())
						->with('title', 'Show Movie');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /movies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /movies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}