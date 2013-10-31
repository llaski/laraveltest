<?php

class Post extends Eloquent {

	protected $guarded = array('id');

	public function author()
	{
		return $this->belongsTo('Author');
	}
}