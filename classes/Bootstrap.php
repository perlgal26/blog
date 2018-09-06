<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		//var_dump($request);
		if(empty($this->request['controller'])  || $this->request['controller'] == ""){
			$this->controller = 'home';
		} else {
			$this->controller = $this->request['controller'];
		}
		if(empty($this->request['action'])  || $this->request['action'] == ""){
			//echo "here im in action if loop<br/>";
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];
		}
		
		
	}

	public function createController(){
		// Check Class
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			//echo "IN createController<br/>";
			//print_r($parents);
			// Check Extend
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				} else {
					// Method Does Not Exist
					echo '<h1>Method does not exist</h1>';
					return;
				}
			} else {
				// Base Controller Does Not Exist
				echo '<h1>Base controller not found</h1>';
				return;
			}
		} else {
			// Controller Class Does Not Exist
			echo '<h1>Controller class does not exist</h1>';
			return;
		}
	}
}