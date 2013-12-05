<?php

class Post extends BaseModel {
	protected $guarded = array('id');

	public static $rules = [
		'title' => 'required',
		'body' => 'required'
	];
}