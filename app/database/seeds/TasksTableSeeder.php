<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('tasks')->truncate();

		$tasks = array(
			['name' => 'Go Home'],
			['name' => 'Go to Work'],
			['name' => 'Go Workout']
		);

		// Uncomment the below to run the seeder
		DB::table('tasks')->insert($tasks);
	}

}
