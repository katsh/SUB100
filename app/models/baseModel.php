<?php

class baseModel
{

	function __construct()
	{
		try {
			$this->sql =  new PDO('mysql:host=localhost; dbname=x', 'user', 'pwd');
		} catch (Exception $e) {
			// Do something more useful to your liking here
			#die("Failed to connect to database");	
		}	
	}
		
}

?>
