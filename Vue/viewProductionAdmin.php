	<h1>Productions</h1>
	<hr />
<?php
include("../Modele/Production.php");
	while ($tuple = mysql_fetch_array($res))
	{
	$i = $tuple['idP'];
	 ?>	

	<div id="container">
		<div class="gauche">
			<p>Produit : <?php echo "$tuple[nomP]"; ?><p>
		</div>

		<div class="milieu">
			<p>Prix : <?php echo "$tuple[prixP]"; ?></p>
		</div>

		<div class="image"> <!--nom temporaire pour citer l'incrustation de l'image dans la description -->
			<p>Image</p>
		</div>

		<div class="dessous">
			<p>Description : <?php echo "$tuple[descriptionP]"; ?></p>
		</div>

		<div class="suppr">
			<p> <?php echo"<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Produit'/>
        </button></td></tr>"; ?></p>
		</div>	
	</div>
<?php
	} 
		?>
<br />

<h2>Ajout d'une production</h2>
<hr />
	
	<form method="POST" action="./controlAddProduc.php">
		<fieldset>
			<label>Nom :</label><input type="text" name="nomP" required><br />
			<label>Description :</label><input type="text" name="descriptionP" required><br />
<<<<<<< HEAD
			<label>Prix :</label><input type="text" name="prix" required><br />
			<label for="image">Image (JPG, PNG ou GIF) :</label><br />
			<input type="file" name="icone" id="icone" required/><br />
			<input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
=======
			<label>Prix :</label><input type="text" name="prixP" required><br />
			<label>Image :</label><input type="text" name="imageP" required><br />
>>>>>>> Avec controlAdd c'est mieux
			<input type="submit" value="Ajouter"><br />
		</fieldset>
	</form>
	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>
