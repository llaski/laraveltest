<?php

class Snippet extends Eloquent {
	protected $guarded = array();
	public $timestamps = false;

	public static $rules = array(
		'snippet' => 'required'
	);

	public static function validate()
	{
		$v = Validator::make($input, static::$rules);
		$v->valid();

		return $v->errors->all();
	}
}
