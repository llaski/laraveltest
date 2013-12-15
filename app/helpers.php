<?php 

//Helpers

function link_me_to($url, $text, $parameters = null)
{
	$url = url($url);
	// $attributes = '';

	$attributes = $parameters ? HTML::attributes($parameters) : '';
	
	// if ($params)
	// {
	// 	foreach ($params as $class => $value) {
	// 		$attributes .= " {$class}='{$value}'";
	// 	}
	// }

	return "<a href='{$url}'{$attributes}>{$text}</a>";
}