<?php

$idVisiteur = $_SESSION['idVisiteur'];
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'listeDeFrais';
}
$action = $_REQUEST['action'];
switch($action){
	case 'listeDeFrais':{
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("vues/v_listeFrais.php");
		break;
    }
    case 'voirEtatFrais':{
		$leMois = $_REQUEST['lstMois']; 
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$moisASelectionner = $leMois;
		include("vues/v_listeFrais.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur, $leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$listeVisiteurDelegueSuite = $pdo->listeVisiteurDelegueSuite($idVisiteur, $leMois);
		$libEtat = $listeVisiteurDelegueSuite['libEtat'];
		$montantValide = $listeVisiteurDelegueSuite['montantValide'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		$listeVisiteurDelegue = $pdo->listeVisiteurDelegue($idVisiteur, $leMois);
		
		include("vues/v_listeFraisSuite.php");
		break;
	}
}
