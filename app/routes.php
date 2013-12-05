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

// Route::resource('photos', 'PhotosController');

//Route Binding
Route::model('photo', 'Photo');
Route::get('photos/{photo}', function(Photo $photo){
	return $photo;
})->where('id', '\d+');

// Route::resource('lists', 'ListsController');
// Route::resource('lists.tasks', 'TasksController');
Route::resource('tasks', 'TasksController');

Route::get('/mail', function()
{
	$data = ['name' => 'Guy'];
	Mail::pretend();
	Mail::send('emails.welcome', $data, function($message)
	{
		$message->to('larrylaski@gmail.com')->subject('Welcome!');
	});

	return 'Sent';
});

Route::get('/mailers', function()
{
	$obj = test::Instance();
	$ob2 = test::Instance();
	$ob3 = test::Instance();
	echo '<pre>';
	print_r($obj);
	echo '<br>';
	print_r($ob2);
	echo '<br>';
	dd($ob3);
	$user = User::first();

	$mailer = new Mailers\UserMailer($user);
	// $mailer->welcome()->deliver();
});

Route::resource('posts', 'PostsController');

Route::resource('posts', 'PostsController');