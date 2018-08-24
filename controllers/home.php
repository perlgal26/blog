<?php
class Home extends Controller{
	protected function Index(){
		//echo 'Home/Index';
		$viewmodel = new HomeModel();
		$this->ReturnView($viewmodel->Index(),true);
	}
}


?>