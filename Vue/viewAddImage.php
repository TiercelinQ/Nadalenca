<h1>Gestion des images</h1>
<hr />

<table border = "1">
	<tr>
		<td>Titre</td>
		<td>Description</td>
		<td>Supprimer</td>
			<?php
	while ($tuple = mysql_fetch_array($res))
	{ 	
		$i = $tuple['idI'];
		echo "<tr><td>" . $tuple['titreI'] . "</td>";
		echo "<td>" . $tuple['descriptionI'] . "</td>";
		echo "<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Video'/></button></td></tr>";
	}

	?>
	</table><br/>

<h2>Ajout d'une image</h2>
<hr />

<form method="post" action="controlValidAddImage.php" enctype="multipart/form-data">
     <label for="image">Image (JPG, PNG ou GIF) :</label>
     <input type="file" name="image" id="image" /><br />
	 <input type="hidden" name="MAX_FILE_SIZE" value="1048576000000" /><br />
     <label for="titre">Titre du fichier (max. 50 caractères) :</label>
     <input type="text" name="titre" placeholder="Titre du fichier" id="titre" /><br />
     <label for="description">Description de votre fichier (max. 255 caractères) :</label>
     <textarea name="description" id="description"></textarea><br />
     <input type="submit" name="submit" value="Envoyer" />  
</form>

<br />

<a href="./controlAdministrateur.php">Retour au panneau d'administration</a>