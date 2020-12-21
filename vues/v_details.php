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

<h2>Détails de  : </h2>
<p>
        <strong>Etat : </strong>   
            <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> 
            <strong> Montant des frais :</strong> <span class="label label-info">  <?php echo $montantValide?> </span>            
                 
    </p>
  	<table class="table table-bordered">
  	   <caption>Eléments forfaitisés </caption>
           <thead>
              <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
            </thead>
            <tbody>
                <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
            </tbody>
    </table><br>
