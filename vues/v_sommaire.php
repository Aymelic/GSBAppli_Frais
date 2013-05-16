    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
                            <strong><u><?php echo $_SESSION['libelle'] ?></u><br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?><br>
                                <?php echo "" ?><br>
                            </strong>
			</li>
                        <u><?php echo "$TXT_SOMMAIRE_SAISIRFICHEDEFRAIS"; ?></u>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFraisForfaitaire" title="Saisie fiche de frais "><?php echo "$TXT_SOMMAIRE_FRAISFORFAITAIRE"; ?></a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFraisHorsForfait" title="Saisie fiche de frais "><?php echo "$TXT_SOMMAIRE_FRAISHORSFORFAIT"; ?></a>
           </li>
           <?php echo "" ?><br>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais"><?php echo "$TXT_SOMMAIRE_MESFICHESDEFRAIS"; ?></a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter"><?php echo "$TXT_SOMMAIRE_DECONNEXION"; ?></a>
           </li>
         </ul>
        
    </div> 

