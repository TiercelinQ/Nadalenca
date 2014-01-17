<form method="post" action="controlValidAddIimage.php" enctype="multipart/form-data">
     <label for="image">Image (JPG, PNG ou GIF) :</label><br />
     <input type="file" name="image" id="image" /><br />
	 <input type="hidden" name="maxsize" value="1048576000000" />
     <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
     <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
     <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />  
</form>