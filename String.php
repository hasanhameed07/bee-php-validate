<?php
class Bee_Validate_String
{

	public static function isEmpty ($string, $withSpaces=false)
	{
		if ($withSpaces)
			return ($str === '');
		else
			return (trim($str) === '');
	}


	public static function isAlpha ($string)
	{
		return preg_match("/^[a-z\ ]*$/i", $string);
	}


	public static function isNum ($string)
	{
		return preg_match("/^[0-9\ ]*$/i", $string);
	}



	public static function isFloat ($string)
	{
		return preg_match("/^[0-9\.\ ]*$/i", $string);
	}


	public static function isAlnum ($string)
	{
		return preg_match("/^[a-z0-9\ ]*$/i", $string);
	}


	public static function isAlnumHyphen ($string)
	{
		return preg_match("/^[a-z0-9-\ ]*$/i", $string);
	}


	public static function isAlnumUnderscore ($string)
	{
		return preg_match("/^[a-z0-9_\ ]*$/i", $string);
	}

}
//echo Bee_Validate_String::isAlnum('abcd123');
?>