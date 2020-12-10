<?php
include("vues/v_sommaire.php")
?>

<div class="row">           


<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
    //modif Ruya
?>

<form action="index.php?uc=modifierMdp&action=valideMdp" method="post" class="form-vertical">

<fieldset>

<div class="form-group"> 
    <label for="mdp">Saisir votre mot de passe actuel : </label>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
        <input class="form-control" type="password" name="mdp" id="mdp" required><br>
        </div>
    </div>
</div>

<div class="form-group"> 
    <label for="nvmdp">Saisir votre nouveau mot de passe : </label>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
        <input class="form-control" type="password" name="nvmdp" id="nvmdp" required><br>
        </div>
    </div>
</div>

<div class="form-group"> 
    <label for="nvmdp2">Confirmez votre nouveau mot de passe : </label>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
        <input class="form-control" type="password" name="nvmdpsuite" id="nvmdpsuite" required><br>
        </div>
    </div>
</div>

    <button type="submit" class="btn btn-primary">Valider</button>
    <button type="reset" class="btn btn-primary">Annuler</button>

</fieldset>

</form>

</div>
</div>
