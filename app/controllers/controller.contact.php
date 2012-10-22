<?php

class Contact extends baseController
{

	function __construct($method = 'view', $params = null)
	{
		include_once(ROOT . '/app/models/model.index.php');
		
		$this->header_text = 'Contact Me';

		if (isset($_POST['submit'])) {
			$this->process_form($_POST);
		} else {
			$this->$method();
		}
				
	}
	
	
	/*
	function __call($name, $args) {
		// Do whatever here. If we're here, we called $controller->$x where $x
		// is a method that does not exist in this class. So this method gets called.
		// $args is $url_array
		$this->view();
	}
	*/
	

	function process_form($_POST)
	{
		if (isset($_POST['submit'])) {
		
			if (!empty($_POST['lastname'])) {
				echo "You filled a field you weren't supposed to. 
				You are probably a bot. If not, you most likely used autofill.
				Try agin without autofill :)";
	
				include('/includes/footer.php');
				exit();
			}
			
			// Made it past the captcha. Let's valdiate.
			// (will always submit since the validator methods
			// always returns true for exame purpose. go edit
			// /library/class.validator.php)
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$message = trim($_POST['message']);

			include (ROOT . "/library/class.validator.php");
			$val = new Validator();
			$this->form_msg = array();
			if (!$val->name($name) ||
				!$val->email($email) ||
				!$val->message($message)) {
				/**
				 * I do front-end validation in js as well. So if
				 * the script is at this point, the user most likely
				 * turned off js to try to bypass validation and
				 * do something naughty. Ideally here we should
				 * display some errors the back-end validator
				 * detected. But if the user is being bad and 
				 * trying to break the site, why be nice?
				 * Just redirect them to the front page and
				 * let them be happy with that. Change as you wish
				 */
				header("Location: /");	
			} else {
				if (@ mail('someone@gmail.com', "Form filled", nl2br($message)) ) {
					$this->form_msg['success'] = "
					<div class='success'>
					<h3>Thank you.</h3>	
					Form has been sent.
					</div>";
				} else {
					$this->form_msg['error']= "
					<div class='error'>
					<h3>Not sent.</h3>	
					Something is wrong with the mail server.
					</div>";	
				}
			}
		}
		$this->view();
	}


	function view($view = null) {
		$view = strtolower(get_class($this));
		parent::view($view);
	}
	
}

?>
