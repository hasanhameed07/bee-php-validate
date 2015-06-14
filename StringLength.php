<?php
/*
 * Validation helper methods for String Length
 *
 * @author Hasan Hameed <hasan.hameed07@gmail.com>
 * @see https://github.com/hasanhameed07/bee-php-validate
 */
class Bee_Validate_StringLength
{

	public static function within ($string, $minlength, $maxlength)
	{
		$strlen = strlen($string);
		return ($strlen > $minlength && $strlen < $maxlength)? true : false ;
	}


	public static function isLessThan ($string, $maxlength)
	{
		$strlen = strlen($string);
		return ($strlen < $maxlength)? true : false ;
	}


	public static function isGreaterThan ($string, $minlength)
	{
		$strlen = strlen($string);
		return ($strlen > $minlength)? true : false ;
	}

}
?>