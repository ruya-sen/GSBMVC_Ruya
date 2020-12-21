    <!-- Division pour le sommaire -->
<div class="row">
      
    <nav class='col-md-2'>
        
        <h4>
        <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']."<br>".$_SESSION['role']."<br>".$_SESSION['reg']."<br>".$_SESSION['sec']  ?>
        </h4>
           
        <ul class="list-unstyled">
			
           <li>
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li>
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           <li><?php
                if(($_SESSION['role'] == "Délégué") || ($_SESSION['role'] == "Responsable")){
                    echo '<a href="index.php?uc=listeFrais&action=listeDeFrais" title="Liste des fiches de frais">Liste des fiches de frais</a>';
                }
                ?>
           </li>
           <hr>
           <li>
               <a href="index.php?uc=modifierMdp&action=modifierMotDePasse">Modifier le mot de passe</a>
           </li>
           <li>
              <a href="index.php?uc=modifInfoPerso&action=modifier" title="Modifier les informations personnelles">Modifier les informations personnelles</a>
           </li>
           <hr>
           <li>
              <a href="index.php?uc=newUser&action=creerUtilisateur" title="Créer un Utilisateur">Créer un nouvel Utilisateur</a>
           </li>
           <hr>
 	         <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </nav>
<div id="contenu" class="col-md-10">
   
        
    
    