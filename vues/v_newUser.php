<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="post" action="index.php?uc=newUser&action=creer">
         <fieldset>
             <legend>Veuillez entrer vos coordonées:</legend>
   	 <div class="form-group"> 	
         <label for="nom">Entrer votre nom: </label>
         <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
             <input class="form-control"  id="nom" type="text" name="nom"  size="30" placeholder="Nom" required>
         </div>
            </div>
         </div>

         <div class="form-group"> 
	       <label for="prenom">Prenom*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="prenom"  type="text"  name="prenom" size="30" maxlength="45" placeholder="Prenom"  required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="pseudo">Login*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="login"  type="text"  name="login" size="30" maxlength="45" placeholder="login"  required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="newmdp">Mot de passe*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="newmdp"  type="password"  name="newmdp" size="30" maxlength="45" placeholder="Mot de passe" required>
            </div>
        </div>
        </div>

        <div class="form-group"> 
	       <label for="newmdp">Confirmer le mot de passe*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="newmdp"  type="password"  name="newmdp" size="30" maxlength="45" placeholder="Confirmer le mot de passe" required>
            </div>
        </div>
        </div>
        
         <div class="form-group"> 
	       <label for="adresse">Adresse*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="adresse"  type="text"  name="adresse" size="30" maxlength="45" placeholder="Adresse" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="cp">Code Postal*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="cp"  type="text"  name="cp" size="30" maxlength="45" placeholder="Code postal" pattern="[0-9]{5}" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="ville">Ville*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="ville"  type="text"  name="ville" size="30" maxlength="45" placeholder="Ville" required>
            </div>
        </div>
        </div>

         <div class="form-group"> 
	       <label for="datemb">Date d'embauche*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="datemb"  type="text"  name="datemb" size="30" maxlength="45" placeholder="Date d'embauche" required>
            </div>
        </div>
        </div>

            <button type="submit" class="btn btn-primary">Créer</button>
             <button type="reset" class="btn btn-primary">annuler</button>
        </fieldset>
        </form>
