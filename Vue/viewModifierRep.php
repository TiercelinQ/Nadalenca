	<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifierRep.php" >
		<legend> Modifier un morceau :</legend>
		<fieldset>
		<input type="hidden" value="<?php echo $rep->getNom(); ?>" name="nom">
		<label>Audio : </label>(Fichier en MP3)
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
		<input type="file" name="audio">Nom du fichier existant : <?php echo $rep->getAudio(); ?></br>
		<label>Texte : </label>(Fichier en PDF)
		<input type="file" name="texte">Nom du fichier existant : <?php echo $rep->getTexte(); ?></br>
		<label>Voix1 :</label>
		<input type="file" name="voix1">Nom du fichier existant : <?php echo $rep->getVoix1(); ?></br>
		<label>Voix2 :</label>
		<input type="file" name="voix2">Nom du fichier existant : <?php echo $rep->getVoix2(); ?></br>
		<label>Voix3 :</label>
		<input type="file" name="voix3">Nom du fichier existant : <?php echo $rep->getVoix3(); ?></br>
		<label>Voix4 :</label>
		<input type="file" name="voix4">Nom du fichier existant : <?php echo $rep->getVoix4(); ?></br>
		<input type="submit" value="Modifier" />
		</fieldset>
	</form>
	<p>Nommer les fichiers exactement comme le fichier existant.</p>
	