<div id="contenu">
      <h2><?php echo $TXT_CONNEXION_IDENTIFICATIONUTILISATEUR; ?></h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom"><?php echo $TXT_CONNEXION_LOGIN; ?></label>
       <input id="login" type="text" name="login"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp"><?php echo $TXT_CONNEXION_MOTDEPASSE; ?></label>
			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
      </p>
         <input type="submit" value="<?php echo $TXT_CONNEXION_VALIDER; ?>" name="valider">
         <input type="reset" value="<?php echo $TXT_CONNEXION_ANNULER; ?>" name="annuler"> 
      </p>
</form>

</div>