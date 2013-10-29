<?php

Event::listen('laravel.query', function($sql){
	var_dump($sql);
});
