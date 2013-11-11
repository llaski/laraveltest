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