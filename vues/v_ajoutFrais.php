<?php
echo"
<h3><?php echo $TXT_AJOUTFRAIS_AJOUTERUNNOUVEAUFRAISHORSFORFAIT; ?></h3>
<form method='POST' action='index.php?uc=gererFrais&action=validerCreationFrais'>
<table class='tabNonQuadrille'>
<tr>
	<td><?php echo $TXT_AJOUTFRAIS_DATEDUFRAIS; ?></td>
	<td>
		<input  type='text' name=dateFrais  size='30' maxlength='45'>
	</td>
</tr>
<tr>
	<td><?php echo $TXT_AJOUTFRAIS_DESCRIPTIONDUFRAIS; ?></td>
	<td>
		<input  type='text' name=description  size='50' maxlength='100'>
	</td>
</tr>
<tr>
	<td><?php echo $TXT_AJOUTFRAIS_MONTANTENGAGE; ?></td>
	<td>
		<input  type='text' name=montant  size='30' maxlength='45'>
	</td>
</tr>
<tr>
<td>Justificatif</td>
<td><input type='radio' name='justificatif' value='oui'><?php echo $TXT_AJOUTFRAIS_OUI; ?>
</td>
<td>
<input type='radio' name='justificatif' value='non'><?php echo $TXT_AJOUTFRAIS_NON; ?>
</td>

</tr>

</table>
<input type='submit' value='<?php echo $TXT_AJOUTFRAIS_VALIDER; ?>' name='valider'>
         <input type='reset' value='<?php echo $TXT_AJOUTFRAIS_ANNULER; ?>' name='annuler'>

</form>
";
?>