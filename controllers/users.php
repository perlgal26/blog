<?php
class Users extends Controller{
	
	protected function register(){
		//echo 'controller/Users/Register';
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(),true);
	}
	protected function login(){
		//echo 'controller/Users/Register';
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(),true);
	}
	
	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		header('Location: '.ROOT_URL.ROOT_SHARE_CONTROLLER);
				
	}
}