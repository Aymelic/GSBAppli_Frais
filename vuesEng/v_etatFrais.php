
<h3>Costs of th month <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        state : <?php echo $libEtat?> since <?php echo $dateModif?> <br> Amount validated : <?php echo $montantValide?>
              
                     
    </p>
  	<table class="listeLegere">
  	   <caption>Fixed cost elements</caption>
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
    </table>
  	<table class="listeLegere">
  	   <caption>Descrption of unfixed price elements -<?php echo $nbJustificatifs ?> justification received -
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Description</th>
                <th class='montant'>Amount</th>                
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>
  </div>
 













