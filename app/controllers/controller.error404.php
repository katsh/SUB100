<?php

/**
 * The 404 controller. Only needs one method, really,
 * which is the 'view', to display a page to the user
 * the page can't be found. Feel free to extend
 * on this if you'd like, and include more
 * meaningful things such as suggestions, etc
 */

class Error404 extends baseController
{

	function __construct($method = null, $args = null)
	{
		// Invoke requested method.	
		if( $method !== null ) {
			$this->$method();
		} else {
			$this->view();
		}
	}

	
	function view($view = null, $vars = null)
	{
		parent::view('error404');
	}	
	
}

?>
