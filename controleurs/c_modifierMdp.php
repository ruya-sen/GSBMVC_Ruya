<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'modifierMotDePasse';
}
$action = $_REQUEST['action'];
switch($action){
	case 'modifierMotDePasse':{
		include("vues/v_formulaire.php");
		break;
	}
	case 'valideMdp':{
		$login = $_SESSION['login'];
		$mdp = $_REQUEST['mdp'];
		$nvmdp = $_REQUEST['nvmdp'];
		$nvmdp2 = $_REQUEST['nvmdpsuite'];
		$visiteur = $pdo->getInfosVisiteur($login, $mdp);
		$pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
		if(!is_array( $visiteur)){
			ajouterErreur("Mot de passe actuel incorrect","modifierMdp");
		}
		else{
			if(($nvmdp) != ($nvmdp2)){
				ajouterErreur("Nouveau mot de passe incorrect", "modifierMdp");
				include("vues/v_formulaire.php");
			}
			else if($nvmdp == $mdp){
				ajouterErreur("Nouveau mot de passe identique à l'ancien", "modifierMdp");
				include("vues/v_formulaire.php");
			}
			else if(!(preg_match($pattern, $nvmdp))){
				ajouterErreur("Mot de passe ne contenant pas de chiffre, ou de lettre majuscule ou minuscule", "modifierMdp");
				include("vues/v_formulaire.php");
			}
			else{
				$changement = $pdo->changementMdp($nvmdp);
				include("vues/v_formulaire.php");
			}
		break;
	}
}
	default :{
		include("vues/v_formulaire.php");
		break;
	}
}
?>
