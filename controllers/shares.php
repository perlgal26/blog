<?php
class Shares extends Controller{
	
	protected function Index(){
		//echo 'controllers/shARES/Index';
		//print_r($_SESSION);
		//echo $_SESSION['user_data']['id'];
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
	}// end of add function
	
	protected function delete(){
		//echo 'controllers/shARES/delete';
		if(!isset($_SESSION['is_logged_in'])){
			header('Location:' .ROOT_URL.ROOT_SHARE_CONTROLLER);
		}
		$viewmodel = new ShareModel();
		var_dump($viewmodel);
		$view = $this->ReturnView($viewmodel->delete(),true);
		//echo $view;
	}// end of delete function
	
	protected function edit(){
		//echo 'controllers/shARES/delete';
		if(!isset($_SESSION['is_logged_in'])){
			header('Location:' .ROOT_URL.ROOT_SHARE_CONTROLLER);
		}
		$viewmodel = new ShareModel();
		//print_r($viewmodel);
		$view = $this->ReturnView($viewmodel->edit(),true);
		
	}
	
	
	
}
?>