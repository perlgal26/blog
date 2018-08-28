<?php
class Shares extends Controller{
	
	protected function Index(){
		//echo 'controllers/shARES/Index';
		$viewmodel = new ShareModel();
		//print_r($viewmodel);
		$this->ReturnView($viewmodel->Index(),true);
	}
	
	protected function add(){
		//echo 'controllers/shARES/add';
		//var_dump($_SESSION);
		if(!isset($_SESSION['is_logged_in'])){
			header('Location:' .ROOT_URL.ROOT_SHARE_CONTROLLER);
		}
		$viewmodel = new ShareModel();
		//var_dump($viewmodel);
		$this->ReturnView($viewmodel->add(),true);
	}
	
	
}
?>