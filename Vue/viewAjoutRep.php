	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutRep.php" >
		<legend> Ajouter un morceau :</legend>
		<fieldset>
		<label>Nom :</label>
		<input type="text" placeholder="Ex : Nadalet" name="nom"></br>
		<label>Audio : </label>(Fichier en MP3)
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
		<input type="file" name="audio"></br>
		<label>Texte :</label>(Fichier en PDF)
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
	<p>Les fichiers audios et textes ne doivent pas comprendrent d'espaces dans leur nom (Ex : mon fichier.extension n'est pas bon, mon_fichier.extension, et monfichier.extension sont bons.)</p>
	