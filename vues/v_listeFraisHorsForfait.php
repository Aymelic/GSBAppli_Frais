<div id="contenu">
    <div class="corpsForm">
<table class="listeLegere">
  	   <caption><?php echo"$TXT_LISTEFRAISHORSFORFAIT_DESCRIPTIFDESELEMENTSHORSFORFAIT";?>Descriptif des éléments hors forfait</caption>
       
             <tr>
                <th class="date"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_DATE";?></th>
				<th class="libelle"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_LIBELLE1";?></th>  
                <th class="montant"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_MONTANT1";?></th>  
                <th class="action">&nbsp;</th>              
             </tr>
             
          
    <?php    
	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$id = $unFraisHorsForfait['id'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_SUPPRIMERCEFRAIS";?></a></td>
             </tr>
	<?php		 
          
          }
	?>
             </div>
                                         
    </table>
      <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">  
      <div class="corpsForm">
         
          <fieldset>
            <legend><?php echo"$TXT_LISTEFRAISHORSFORFAIT_NOUVELELEMENTHORSFORFAIT";?>
            </legend>
            <p>
              <label for="txtDateHF"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_DATEJJMMAAAA";?></label>
              <input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
            </p>
            <p>
              <label for="txtLibelleHF"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_LIBELLE2";?></label>
              <input type="text" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
            </p>
            <p>
              <label for="txtMontantHF"><?php echo"$TXT_LISTEFRAISHORSFORFAIT_MONTANT2";?></label>
              <input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
            </p>
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ajouter" type="submit" value="<?php echo"$TXT_LISTEFRAISHORSFORFAIT_AJOUTER";?>" size="20" />
        <input id="effacer" type="reset" value="<?php echo"$TXT_LISTEFRAISHORSFORFAIT_EFFACER";?>" size="20" />
      </p> 
      </div>
        
      </form>
  </div>
  

