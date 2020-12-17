<?php
include("vues/v_sommaire.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'modifier';
}
$action = $_REQUEST['action'];
switch($action){
	case 'modifier':{
		include("vues/v_modifInfoPerso.php");
		break;
    }
	default :{
		include("vues/v_modifInfoPerso.php");
		break;
	}
}
?>