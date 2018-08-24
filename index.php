<?php
//Start Session
session_start();


require ('config.php');
require ('classes/Message.php');
require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require ('controllers/home.php');
require ('controllers/shares.php');
require ('controllers/users.php');

require ('models/home.php');
require ('models/share.php');
require ('models/user.php');


#RewriteRule ^([a-zA-Z]*/?([a-zA-Z]*) ?/? ([a-zA-Z0-9]*)?/?$ index.php?controller=$1&?action=$2&id=$3)[NC,L]
//print_r($_GET);
$array = $_GET;
//print_r($array);
$curkey = "?action";
$newkey = "action";
replaceKey($array,$curkey,$newkey);
function replaceKey(&$array, $curkey, $newkey)
{
    //echo "here I M"; 
	if(array_key_exists($curkey, $array))
     {
         $array[$newkey] = $array[$curkey];
         unset($array[$curkey]);
         return true;
     }
     return false;
 
}
//print_r($array);
$bootstrap = new Bootstrap($array);
$controller = $bootstrap->createController();
//echo "<br/>IN index blog-------------";
//var_dump($controller);

if($controller){
	$controller->executeAction();
}
?>
