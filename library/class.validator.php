<?php

class Validator {
	
	function email($email)
	{
		return true;
		#return filter_var($email, FILTER_VALIDATE_EMAIL);
	}


	function username($username)
	{
		// change me
		return true;
	}
	
	function password($password)
	{
		// change me
		return true;
	}

	function name($name)
	{
		// change me
		return true;
	}

	function message($msg)
	{
		// change me
		return true;
	}

}

?>
