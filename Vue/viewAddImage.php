<form method="post" action="reception.php" enctype="multipart/form-data">
     <label for="image">Image (JPG, PNG ou GIF) :</label><br />
     <input type="file" name="icone" id="icone" /><br />
	 <input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
     <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
     <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
     <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />
</form>