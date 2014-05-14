<?php

class GenreTableSeeder extends Seeder {

	public function run()
	{
		$genre = array(
			array('genre' =>'Drama'),
			array('genre' =>'Romance'),
			array('genre' =>'action')
		);

		DB::table('types')->insert($genre);
	}
}