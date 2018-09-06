<?php
//echo $_SERVER['SCRIPT_FILENAME']';

//print_r($_SERVER);
//$root_url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//Define DB params
	define ("DB_HOST" ,"localhost");
	define ("DB_USER" ,"root");
	define ("DB_PASS" ,"aditya");
	define ("DB_NAME" ,"shareboard");
	
//Define URL
	define ("ROOT_PATH" ,"/");
	define("ROOT_URL", 'http://localhost/blog/index.php');
	//define("ROOT_URL", $root_url);
	define("ROOT_HOME_CONTROLLER", "?controller=home");
	define("ROOT_SHARE_CONTROLLER", "?controller=shares");
	define("ROOT_USERL_CONTROLLER", "?controller=users&?action=login");
	define("ROOT_USERR_CONTROLLER", "?controller=users&?action=register");
	define("ROOT_USERLO_CONTROLLER", "?controller=users&?action=logout");
?>
