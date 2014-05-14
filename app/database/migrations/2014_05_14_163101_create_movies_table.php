<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('genre_id')->unsigned();
			$table->string('moive_name', 40);
			$table->text('description');
			$table->text('movie_url');
			$table->integer('age')->unsigned();
			$table->timestamps();

			$table->foreign('genre_id')
					->references('id')->on('types')
					->onUpdate('cascade')
					->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');
	}

}
