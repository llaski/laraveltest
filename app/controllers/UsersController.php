<?php

class UsersController extends BaseController {

	public $restful = TRUE;

	public function getIndex()
	{
		return View::make('users.index');
	}

	public function getNew()
	{
		return View::make('users.new');
	}

	public function postIndex()
	{
		return 'User ' . e(Input::get('username')) . ' was created.';
	}

	public function getEdit($username)
	{
		return View::make('users.edit', array('username' => $username));
	}

	public function putUpdate($username)
	{
		return 'Updating: '.$username;
	}

	public function deleteUpdate($username)
	{
		return 'Deleting: '.$username;
	}

}