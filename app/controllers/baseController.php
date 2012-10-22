<?php

abstract class baseController
{
	
	// Includes a file if it exists
	public function includer($path)
	{
		if (is_readable($path) == true) {
			include_once($path);			
		} else {
			// include 404 page
			#include_once(ROOT . '/app/views/view.error404.php');
			#include_once(ROOT . '/includes/footer.php');
			exit;
		}
	}
	
	

	// Calls the view for the controller
	public function view($view, $params = null)
	{
		include_once(PUBLIC_ROOT . '/includes/header.php');
		$this->includer(ROOT . '/app/views/view.' . $view . '.php');
		include_once(PUBLIC_ROOT . '/includes/footer.php');
	}	
	
}
