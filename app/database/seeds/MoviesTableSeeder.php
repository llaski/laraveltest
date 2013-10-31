<?php

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('movies')->truncate();

		$movies = array(
			array('name' => 'Rocky'),
			array('name' => 'Avengers'),
			array('name' => 'Iron Man')
		);

		// Uncomment the below to run the seeder
		DB::table('movies')->insert($movies);
	}

}
