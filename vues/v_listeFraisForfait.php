<div id="contenu">
      <h2><?php echo $TXT_LISTEFRAISFORFAIT_RENSEIGNERMAFICHEDEFRAISDUMOISDE; echo $dateMois." ".$numAnnee ?></h2>
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
          
          <fieldset>
            <legend><?php echo $TXT_LISTEFRAISFORFAIT_ELEMENTFORFAITISES; ?>
            </legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
					</p>
			
			<?php
				}
			?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="<?php echo $TXT_LISTEFRAISFORFAIT_VALIDER; ?>" size="20" />
        <input id="annuler" type="reset" value="<?php echo $TXT_LISTEFRAISFORFAIT_EFFACER; ?>" size="20" />
      </p> 
      </div>
        
      </form>
  