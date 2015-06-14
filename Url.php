<?php
/*
 * Validation helper methods for URL
 *
 * @author Hasan Hameed <hasan.hameed07@gmail.com>
 * @see https://github.com/hasanhameed07/bee-php-validate
 */
class Bee_Validate_Url
{

	public static function isValid ($url, $absolute=true)
	{
	  $allowed = '[a-z0-9\/:_\-_\.\?\$,;~=#&%\+]';

	  return ($absolute)? 
			preg_match("/^(http|https|ftp):\/\/". $allowed ."+$/i", $url) :
			preg_match("/^". $allowed ."+$/i", $url) ;
	}

}
?>