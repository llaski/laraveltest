<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostsTableSeeder');
		$this->call('PhotosTableSeeder');
		$this->call('ListsTableSeeder');
		$this->call('TasksTableSeeder');
	}

}