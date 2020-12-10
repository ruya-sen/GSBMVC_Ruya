<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect","connexion");
			include("vues/v_connexion.php");
		}
		else{
			$vinfo = $pdo->getInfoAffe();
            $id = $visiteur['id'];
            $nom =  $visiteur['nom'];
            $prenom = $visiteur['prenom'];
            $role = $vinfo['aff_role'];
            $region = $vinfo['reg_nom'];
            $secteur = $vinfo['sec_nom'];
            connecter($id,$nom,$prenom, $role, $region, $secteur);
            include("vues/v_sommaire.php");
		}
		//remplacement de tout le else par Ronan le 08/12/2020
		
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
//modif Ruya
?>