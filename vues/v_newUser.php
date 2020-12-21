<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="post" action="index.php?uc=newUser&action=valideUtilisateur">
         <fieldset>
             <legend>Veuillez entrer vos coordonées:</legend>
   	 
             <div class="form-group"> 	
         <label for="nom">Id</label>
         <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="id" type="text" name="id"  size="30" placeholder="Id" required>
         </div>
            </div>
         </div>

        <div class="form-group"> 	
         <label for="nom">Nom</label>
         <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="nom" type="text" name="nom"  size="30" placeholder="Nom" required>
         </div>
            </div>
         </div>

         <div class="form-group"> 
	       <label for="prenom">Prenom</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="prenom"  type="text"  name="prenom" size="30" maxlength="45" placeholder="Prenom"  required>
            </div>
        </div>
        </div>
        
         <div class="form-group"> 
	       <label for="adresse">Adresse</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="adresse"  type="text"  name="adresse" size="30" maxlength="45" placeholder="Adresse" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="cp">Code Postal</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="cp"  type="text"  name="cp" size="30" maxlength="45" placeholder="Code postal" pattern="[0-9]{5}" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="ville">Ville</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="ville"  type="text"  name="ville" size="30" maxlength="45" placeholder="Ville" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="datemb">Date d'embauche</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="datemb"  type="date"  name="datemb" size="30" maxlength="45" placeholder="Date d'embauche" required>
            </div>
        </div>
        </div>

        <div class="form-group"> 
	       <label for="role">Rôle</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <select class="form-control" id="role"  type="text"  name="role" placeholder="Rôle" required>
                    <option value="delegue">Délégué</option>
                    <option value="visiteur">Visiteur</option>
                </select>
            </div>
        </div>
        </div>

        <div class="form-group"> 	
         <label for="region">Région d'affectation</label>
         <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
            <select class="form-control"  id="region" type="text" name="nom" placeholder="Région d'affectation" required>
            <?php 
            $region = $pdo->region();
            echo $region['reg_nom'];
            ?>
            <br>
            </select>
         </div>
            </div>
         </div>

            <button type="submit" class="btn btn-primary">Créer</button>
             <button type="reset" class="btn btn-primary">Annuler</button>
        </fieldset>
        </form>
