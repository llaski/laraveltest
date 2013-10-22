<?php

class Helpers {

	/**
	 * Dump the passed variables and end the script.
	 *
	 * @param  dynamic  mixed
	 * @return void
	 */
	public static function dd($data)
	{
		print '<pre>';
		print_r($data);
		print '</pre>';
		exit;
	}

}