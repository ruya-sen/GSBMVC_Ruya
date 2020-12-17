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
<h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h2>
    <form class="form-vertical" method="POST"  action="index.php?uc=listeFrais&action=voirEtatFrais">
      <div class="corpsForm">
      <?php
      echo $listeVisiteurDelegue = $pdo->listeVisiteurDelegue();
      ?>
