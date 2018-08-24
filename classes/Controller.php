<?php
abstract class Controller{
	
	protected $action;
	protected $request;
	
	public function __construct($action,$request){
		//echo "In Class==>".get_class($this)."<br/>";
		//echo "action==>".$action."<br/>";
		//echo "request==>".print_r($request);
		$this->action = $action;
		$this->request = $request;
		
	}
	public function executeAction(){
		//echo "In executeAction CONTROLLER.php <br/>".var_dump($this);
		return $this->{$this->action}();
	}
	
	protected function returnView($viewmodel, $fullview){
		$view = 'views/'.get_class($this). '/' .$this->action. '.php';
		if($fullview){
			require('views/main.php');
		}else{
			require($view);
		}
		
	}
	
}

?>