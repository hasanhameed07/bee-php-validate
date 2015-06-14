<?php
/*
 * Validation helper methods for Email
 *
 * @author Hasan Hameed <hasan.hameed07@gmail.com>
 * @see https://github.com/hasanhameed07/bee-php-validate
 */
class Bee_Validate_Email
{

	public static function isValid ($email)
	{
		return preg_match("^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})$", $email);
	}

}
?>