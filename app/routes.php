<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('about', function()
{
	return View::make('home.about');
});

Route::get('query', function()
{
	// $posts = DB::table('posts')->get(); //SELECT * FROM posts

	// $posts = DB::table('posts')->where('id', '>', 1)->first();

	// $posts = DB::table('posts')->where('id', '>', 1)->pluck('title');

	// $posts = DB::table('posts')
	// 			->where('id', '!=', 1)
	// 			->orWhere('title', '=', 'my title')
	// 			->get(); //SELECT * FROM posts

	// $posts = DB::table('posts')
	// 			->whereBody('Test 1 2 3 4')
	// 			->get(); //SELECT * FROM posts


	// $posts = DB::table('posts')
	// 			->where(function($query){
	// 				$query->where('id', '=', 2);
	// 				$query->where('title', 'my title');
	// 			})
	// 			->get(); //SELECT * FROM posts

	$posts = DB::table('posts')
				->orderBy('id', 'desc')
				->take(2)
				->get(); //SELECT * FROM posts

	echo '<pre>';
	print_r($posts);
});