	<form enctype="multipart/form-data" method="post" action="../Controleur/controlModifierRep.php" >
		<legend> Modifier un morceau :</legend>
		<fieldset>
		<input type="hidden" value="<?php echo $rep->getNom(); ?>" name="nom">
		<label>Audio : </label>(Fichier en MP3)
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
		<input type="file" name="audio">Nom du fichier existant : <?php echo $rep->getAudio(); ?></br>
		<label>Texte : </label>(Fichier en PDF)
		<input type="file" name="texte">Nom du fichier existant : <?php echo $rep->getTexte(); ?></br>
		<label>alto :</label>
		<input type="file" name="alto">Nom du fichier existant : <?php echo $rep->getalto(); ?></br>
		<label>basse :</label>
		<input type="file" name="basse">Nom du fichier existant : <?php echo $rep->getbasse(); ?></br>
		<label>soprano :</label>
		<input type="file" name="soprano">Nom du fichier existant : <?php echo $rep->getsoprano(); ?></br>
		<label>tenor :</label>
		<input type="file" name="tenor">Nom du fichier existant : <?php echo $rep->gettenor(); ?></br>
		<input type="submit" value="Modifier" />
		</fieldset>
	</form>
	<p>Nommer les fichiers exactement comme le fichier existant.</p>
	