
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
             <legend>Modifications:</legend>
        
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
	       <label for="tel">Téléphone</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="tel"  type="text"  name="tel" size="30" maxlength="45" placeholder="Téléphone" required>
            </div>
        </div>
        </div>

        <div class="form-group"> 
	       <label for="mail">Mail</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="mail"  type="text"  name="mail" size="30" maxlength="45" placeholder="Mail" required>
            </div>
        </div>
        </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
             <button type="reset" class="btn btn-primary">Annuler</button>
        </fieldset>
        </form>