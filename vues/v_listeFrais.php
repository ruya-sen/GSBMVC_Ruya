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

<form class="form-inline" action="index.php?uc=listeFrais&action=voirEtatFrais" method="post">   
      <div class="corpsForm">
      <fieldset>	 
        <legend>Mois à sélectionner: </legend>
        <div class="form-group">
        <label for="lstMois">Mois :</label> 
        <select id="lstMois" name="lstMois" class="form-control">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			}
           ?>    
        </select>
        <button type="submit" class="btn btn-primary">Rechercher</button>        
       </div>
      </fieldset>	 
      </div>       
      </form>
</div>