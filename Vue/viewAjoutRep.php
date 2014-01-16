<h1>Ajout</h1>
<hr />
	
	<form enctype="multipart/form-data" method="post" action="../Controleur/controlAjoutRep.php" >
		<legend> Ajouter un morceau :</legend>
		<fieldset>
		<label>Nombres de fichiers audios ?</label>
		<input type="int" placeholder="Entre 1 et 5" min="1" max="5" name="nbfa"/></br>
		<label>Nombres de fichiers textes ?</label>
		<input type="int" placeholder="Entre 1 et 5" min="1" max="5" name="nbft"/></br>
		<input type="submit" value="Suivant" />
		</fieldset>
	</form>
	