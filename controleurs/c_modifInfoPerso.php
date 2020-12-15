<?php
include("vues/v_sommaire.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'modifier';
}

/*if (sizeof($checkbox)==0){
exit;}
else{

MySQLi('gsb_frais',$db);
foreach ($checkbox as $valeur){
$sql="";
$req= PDO_MySQL($sql);
}
mysql_close();
exit;
}
*/
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