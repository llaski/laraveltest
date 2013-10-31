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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@getIndex');
Route::get('about', 'HomeController@getAbout');
Route::controller('home', 'HomeController');


Route::get('users/{username}/edit', 'UsersController@getEdit');
Route::put('users/{username}', 'UsersController@putUpdate');
Route::delete('users/{username}', 'UsersController@deleteUpdate');
Route::controller('users', 'UsersController');



Route::get('movies', array('as' => 'movies', 'uses' => 'MoviesController@index'));
Route::get('movies/new', array('as' => 'new_movie', 'uses' => 'MoviesController@create'));
Route::get('movies/{name}', array('as' => 'movie', 'uses' => 'MoviesController@show'));
// Route::resource('movies', 'MoviesController');

Route::get('admin', 'AdminController@index');
Route::get('admin/preferences', 'AdminPreferencesController@index');


Route::get('/auth', function(){
	$credentials = array(
		'email' => 'llaski@resolute.com',
		'password' => 'llaski123'
	);

	// $user = User::find(1);
	// $user->password = Hash::make('llaski123');
	// $user->save();

	if (Auth::attempt($credentials))
		return 'Valid User';
	else
		return 'Invalid User';
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


/* Route URL Shortner Project */

Route::get('url-shortner', function()
{
	return View::make('urlshortner.index');
});

Route::post('url-shortner', function()
{
	$url = Input::get('url');

	//Validate URL
	$v = Url::validate(array('url' => $url));

	if ( $v !== TRUE)
		return Redirect::to('url-shortner')->withErrors($v->messages());

	//If url exists, return it
	$record = Url::whereUrl($url)->first();

	if ($record)
	{
		return View::make('urlshortner.show')
				->with('shortened', $record->shortened);
	}
	else
	{
		//Otherwise add new row and return shortened url
		$row = Url::create(array(
			'url' => $url,
			'shortened' => Url::get_unique_short_url()
		));

		//Create routes view to present url to user
		if ($row)
			return View::make('urlshortner.show')
				->with('shortened', $row->shortened);
		else
			return 'Error creating record';
	}
});

Route::any('{all}', function($shortened)
{
	//Query db for row with short url
	$row = Url::whereShortened($shortened)->first();

	//if not found, redirect to home page
	if ( is_null($row))
		return Redirect::to('/url-shortner');
	else
		return Redirect::to($row->url);
	
})->where('all', '.*');