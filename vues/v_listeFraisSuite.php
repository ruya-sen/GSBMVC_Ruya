
<h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h2>
    <form class="form-vertical" method="POST"  action="index.php?uc=listeFrais&action=voirEtatFrais">
      <div class="corpsForm">
      <?php
      foreach ($listeVisiteurDelegue as $uneListe)
      {
          $idVisiteur = $uneListe['idVisiteur'];
          $aff_role = $uneListe['aff_role'];
          $aff_reg = $uneListe['aff_reg'];
          $nom = $uneListe['nom'];
          $prenom = $uneListe['prenom'];

          ?>
          <p>
          <label><?php echo $idVisiteur?> 
          <?php echo $aff_reg?> 
          <?php echo $aff_role?> 
          <?php echo $nom?> 
          <?php echo $prenom?>
          </p>
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
      <?php
      }
      ?>


