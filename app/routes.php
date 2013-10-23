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
	$data = array(
		'greeting' => 'Hello',
		'thing' => 'People!',
		'items' => array(
			'apple',
			'plum',
			'banana'
		)
	);

	return View::make('home.about', $data);
});

Route::get('posts', function()
{
	//"Raw Queries"
	// $title = 'Another Post';
	// $body = 'Another Day';

	// DB::insert('INSERT INTO posts (title, body) VALUES (?, ?)', array($title, $body));

	// $posts = DB::select('SELECT * FROM posts');
	// Helpers::dd($posts);

	// Fluent Query Builder

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

Route::get('orm', function()
{
	// $users = User::all();
	// $users = User::find(1);
	// $users = User::all();

	// return View::make('home.orm')->with('users', $users);

	$email = 'llaski@resolute.com';
	$password = '1234';

	$users = User::whereEmailAndPassword($email, $password)->first();
	// Helpers::dd($users);

	$user = new User;
	$user->email = 'larry.laski@gmail.com';
	$user->password = Hash::make('1234');
	$user->save();
});



Route::get('url-shortner', function()
{
	return View::make('urlshortner.index');
});

Route::post('url-shortner', function()
{
	return Input::all();

	//Validate URL

	//If url exists, return it

	//Otherwise add new row and return shortened url

	//Create routes view to present url to user
});