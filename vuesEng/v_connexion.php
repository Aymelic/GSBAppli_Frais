﻿<div id="contenu">
      <h2>User loging</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom">Login*</label>
       <input id="login" type="text" name="login"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp">Password*</label>
			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
      </p>
         <input type="submit" value="Valider" name="valider">
         <input type="reset" value="Annuler" name="annuler"> 
      </p>
</form>

</div>