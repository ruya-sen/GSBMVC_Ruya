<?php
include("vues/v_sommaire.php");
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'creer';
}
$action = $_REQUEST['action'];
switch($action){
	case 'creerUtilisateur':{
		include("vues/v_newUser.php");
		break;
	}
	case 'valideUtilisateur':{
		$idVisiteur = $_REQUEST['id'];
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$adresse = $_REQUEST['adresse'];
		$cp = $_REQUEST['cp'];
		$ville = $_REQUEST['ville'];
		$dateEmbauche = $_REQUEST['datemb'];
		$ajoutUtilisateur = $pdo->ajoutUtilisateur($idVisiteur, $nom, $prenom, $adresse, $cp, $ville, $dateEmbauche);
		$ajoutUtilisateurTravailler = $pdo->ajoutUtilisateurTravailler($idVisiteur, $dateEmbauche, $tra_reg, $tra_role);
		include("vues/v_newUser.php");
		break;
    }
	default :{
		include("vues/v_newUser.php");
		break;
	}
}
?>