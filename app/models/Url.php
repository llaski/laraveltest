<?php

class Url extends Eloquent {

	public $timestamps = false;
	public static $rules = array(
		'url' => 'required|url'
	);

	protected $guarded = array('id');

	public static function validate($input)
	{
		$v = Validator::make($input, static::$rules);
		return $v->fails() ? $v : TRUE;
	}

	public static function get_unique_short_url()
	{
		$shortened = base_convert(rand(10000, 99999), 10, 36);

		if (Url::whereShortened($shortened)->first())
			return get_unique_short_url();

		return $shortened;
	}
}