<?php
include("vues/v_sommaire.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'creer';
}
$action = $_REQUEST['action'];
switch($action){
	case 'creer':{
		include("vues/v_newUser.php");
		break;
    }
	default :{
		include("vues/v_newUser.php");
		break;
	}
}
?>