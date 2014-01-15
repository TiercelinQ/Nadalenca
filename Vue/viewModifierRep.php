<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifierRep.php" >
		<legend> Ajouter un morceau :</legend>
		<fieldset>
		<input type="hidden" value="<?php echo $tuple['nomR']; ?>" name="nom">
		<label>Audio : </label>(Fichier en MP3)
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
		<input type="file" name="audio"></br>
		<label>Texte : </label>(Fichier en PDF)
		<input type="file" name="texte"></br>
		<label>Voix1 :</label>
		<input type="file" name="voix1"></br>
		<label>Voix2 :</label>
		<input type="file" name="voix2"></br>
		<label>Voix3 :</label>
		<input type="file" name="voix3"></br>
		<label>Voix4 :</label>
		<input type="file" name="voix4"></br>
		<input type="submit" value="Ajouter" />
		</fieldset>
	</form>