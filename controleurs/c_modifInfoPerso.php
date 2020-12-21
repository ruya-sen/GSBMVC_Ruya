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
	case 'valideModif':{
		$idVisiteur = $_SESSION['idVisiteur'];
		$adresse = $_REQUEST['adresse'];
		$cp = $_REQUEST['cp'];
		$ville = $_REQUEST['ville'];
		$tel = $_REQUEST['tel'];
		$mail = $_REQUEST['mail'];
		$patterntel = '/^(0|\+33)[1-9]( *[0-9]{2}){4}.*$/';
		$patternmail='/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}.*$/';
		$patternville = '/^[a-zA-Z].*$/';
		$patterncp = '/^[0-9]{5}$/';
		if(!(preg_match($patterntel, $tel))){
			ajouterErreur("Le numéro de téléphone doit être composé uniquement de chiffres (avec éventuellement un +33 en premier).", "modifInfoPerso");
		}
		else if(!(preg_match($patternmail, $mail))){
			ajouterErreur("Adresse mail non valide <br>
			•La partie composant le nom et le domaine, ne doit contenir que des chiffres/lettres ainsi que les caractères tels que l'underscore (_), le tiret (-) ou le point(.)
			<br>•L’extension doit être composée de caractères alphabétiques.
			","modifInfoPerso");
		}
		else if(!(preg_match($patternville, $ville))){
			ajouterErreur("Le nom de la ville doit être composé de caractères alphabétiques.","modifInfoPerso");
		}
		else if(!(preg_match($patterncp, $cp))){
			ajouterErreur("Le code postal doit être composé de 5 caractères numériques.","modifInfoPerso");
		}
		else{
			$modifInfo = $pdo->modifierInfoPerso($idVisiteur, $adresse, $cp, $ville, $tel, $mail);
			Echo '<p style=color:red;padding:10px;background-color:antiquewhite;>Changement réussi !</p>';
		}
	}
	default :{
		include("vues/v_modifInfoPerso.php");
		break;
	}
}
?>