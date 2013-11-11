<?php

class PostsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$posts = [
			['title' => 'First Post', 'body' => 'Body of First Post'],
			['title' => 'Second Post', 'body' => 'Body of Second Post'],
		];

		DB::table('posts')->insert($posts);
	}

}