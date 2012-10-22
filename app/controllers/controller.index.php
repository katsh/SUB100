<?php


class Index extends baseController
{

	function __construct($method = null, $params = null)
	{
		include_once(ROOT . '/app/models/model.index.php');
		$this->model = new ModelIndex();
		$this->$method($params);			
	}
	
	


	function view($view = null, $vars = null)
	{
		$view = strtolower(get_class($this));
		$this->header_text = "The SUB100 MVC framework";
		parent::view($view, array());
	}
	
	
	
	
}

?>
