<?php
ob_start();
session_start();



error_reporting(E_ALL);

/**
 * Just two roots for now. A public one so we can
 * easily serve things like our images, and js includes;
 * And a root for the whole site, so we can easily
 * include app files, 3rd party libraries, etc.
 * We could also have a root for libraries
 * (LIB_ROOT), and whatever else dir is outside
 * /public. But this is meant to be small, so, no.
 */ 
define('PUBLIC_ROOT', realpath(dirname(__FILE__)));
define('ROOT', PUBLIC_ROOT . '/../');



$url = empty($_SERVER['QUERY_STRING']) ? null : $_SERVER['QUERY_STRING'];


/**
 * Include our base classes. Our controllers
 * will be derived from these
 */
include_once(ROOT . '/app/controllers/baseController.php');
include_once(ROOT . '/app/models/baseModel.php');



$url_array = explode('/', $url);
$url_array = array_filter($url_array);

$controller = 'index';
$method = 'view';
$args = null;


// If $url is example.com/users/delete/123...

// first element of $url_array is the controller (users)
if (!empty($url_array)) {	
	$controller = array_shift($url_array);
}

// Second element of $url_array is the method (delete)
if (!empty($url_array)) {
	$method = array_shift($url_array);
}

// Anything else after that are extra arguments to the method.
if (!empty($url_array)) {
	$args = $url_array;	
}



// TODO: use Application::includer() ?
// Does the requested controller exist?
$controller_path = ROOT . '/app/controllers/controller.' . strtolower($controller) . '.php';
if (is_readable($controller_path) == true)  {
	include($controller_path);

	$url_array = explode('/', $url);

	// Replace - with _ in the controller name. this is so we can have
	// a class named New_entry and the url would be new-entry
	$controller = str_replace('-', '_', $controller);

	// ie, new Index('view', array)
	new $controller($method, $args);

} else {
	include(ROOT . '/app/controllers/controller.error404.php');
	$error = new Error404();
}











ob_end_flush();
?>
