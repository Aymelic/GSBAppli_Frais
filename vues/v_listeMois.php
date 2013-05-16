 <div id="contenu">
      <h2><?php echo $TXT_LISTEMOIS_MESFICHESDEFRAIS;?></h2>
      <h3><?php echo $TXT_LISTEMOIS_MOISASELECTIONNER;?></h3>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n"><?php echo $TXT_LISTEMOIS_MOIS;?></label>
        <select id="lstMois" name="lstMois">
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
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="<?php echo $TXT_LISTEMOIS_VALIDER; ?>" size="20" />
        <input id="annuler" type="reset" value="<?php echo $TXT_LISTEMOIS_EFFACER; ?>" size="20" />
      </p> 
      </div>
        
      </form>
	  
	  <!-- Bouton Imprimer --> 
      <table width="130"  border="0" align="center" cellspacing="2" cellpadding="3">
      <td width="29"><a href=javascript:window.print();>
      <IMG alt="Imprimer cette page" src="http://www.orpha.net/images/nestor/toolbox/icoimprim.gif" border=0 align=middle>
      <div align="center">
          <a href=javascript:window.print();><?php echo $TXT_LISTEMOIS_IMPRIMER; ?>
      </div>
      </table>