
<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="post" action="index.php?uc=modifInfoPerso&action=modif">
         <fieldset>
             <legend>Veuillez cocher les zones que vous voulez modifier:</legend>
   	 <div class="form-group"> 	
        <div>
    <input type="checkbox" id="test" name="nom" value="">
    <label for="test">Nom</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="prenom" value="">
    <label for="test">Prenom</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="login" value="">
    <label for="test">Pseudo</label>
  </div>
  <div>
    <input type="checkbox" id="music" name="mdp" value="">
    <label for="test">Mot de passe</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="adresse" value="">
    <label for="test">Adresse</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="cp" value="">
    <label for="test">Code Postal</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="ville" value="">
    <label for="test">Ville</label>
  </div>
  <div>
    <input type="checkbox" id="test" name="dateEmbauche" value="">
    <label for="test">Date d'embauche</label>
  </div>
         </div>


            <button type="submit" class="btn btn-primary">Modifier</button>
             <button type="reset" class="btn btn-primary">annuler</button>
        </fieldset>
        </form>

