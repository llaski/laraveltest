<?php

class BaseModel extends Eloquent
{
	public $errors;
	public static $rules = [];

	public function validate()
	{
		$v = Validator::make($this->attributes, static::$rules);

		if ($v->passes()) return true;

		$this->errors = $v->messages();

		return false;
	}
}