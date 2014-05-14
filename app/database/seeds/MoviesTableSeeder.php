<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		$movies = [
			[
				'genre_id'  =>'1',
				'moive_name'=>'An Inspector Calls',
				'description'=>'Based on a famous stage play and set in the year 1912, an upper crust English family dinner is interrupted...',
				'movie_url'=>'https://www.youtube.com/watch?v=Vukp3EFVweQ',
				'age'=>15,
				'created_at' => date('Y-m-d H-i-s'),
				'updated_at' => date('Y-m-d H-i-s')
			],
			[
				'genre_id'  =>'2',
				'moive_name'=>'A Walk to Remember',
				'description'=>'The story of two North Carolina teens, Landon Carter and Jamie Sullivan, who are thrown together after Landon gets into trouble and is made to do community service.',
				'movie_url'=>'https://www.youtube.com/watch?v=V96uhfQ0x9A',
				'age'=>17,
				'created_at' => date('Y-m-d H-i-s'),
				'updated_at' => date('Y-m-d H-i-s')
			]
		];

		DB::table('movies')->insert($movies);
	}

}