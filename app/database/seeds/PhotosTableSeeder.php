<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('photos')->truncate();

		$photos = array(
			['caption' => 'some photo', 'path' => 'img/1.jpg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['caption' => 'Another Photo', 'path' => 'img/2.jpg', 'created_at' => new DateTime, 'updated_at' => new DateTime]
		);

		// Uncomment the below to run the seeder
		DB::table('photos')->insert($photos);
	}

}
