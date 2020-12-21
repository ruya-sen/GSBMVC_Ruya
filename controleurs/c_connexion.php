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
		$_SESSION['login'] = $_POST['login'];
		$mdp = $_REQUEST['mdp'];
		$_SESSION['mdp'] = $_POST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect","connexion");
			include("vues/v_connexion.php");
		}
		else if(strlen($mdp) < 8){
			ajouterErreur("Mot de passe faible ou expiré, veuillez le changer","connexion");
			$id = $visiteur['id'];
            $nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$vinfo = $pdo->getInfoAffe($id);
            $role = $vinfo['aff_role'];
            $region = $vinfo['reg_nom'];
            $secteur = $vinfo['sec_nom'];
            connecter($id,$nom,$prenom, $role, $region, $secteur);
			include("vues/v_formulaire.php");
		}
		else{
			
            $id = $visiteur['id'];
            $nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$vinfo = $pdo->getInfoAffe($id);
            $role = $vinfo['aff_role'];
            $region = $vinfo['reg_nom'];
            $secteur = $vinfo['sec_nom'];
            connecter($id,$nom,$prenom, $role, $region, $secteur);
            include("vues/v_sommaire.php");
		}
		//remplacement de tout le else par Ronan le 08/12/2020 et modifié par Ronan et Ruya le 14/12/2020
		
		break;
	}
	case 'deconnexion':{
		deconnecter();
		include("vues/v_connexion.php");
		break;
		//ajout du cas deconnexion par Ronan le 15/12/2020
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
//modif Ruya
?>