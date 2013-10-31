<?php

class Author extends Eloquent {

	protected $guarded = array('id');

	public function posts()
	{
		return $this->hasMany('Post');
	}
}