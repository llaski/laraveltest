<?php

class Cat extends Eloquent {

	public function setAgeAttribute()
	{
		$this->attributes['age'] = $age * 7;
	}
}