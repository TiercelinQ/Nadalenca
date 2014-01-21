	<h1>Productions</h1>
	<hr />
<?php
include("../Modele/Production.php");
	while ($tuple = mysql_fetch_array($res))
	{
	$i = $tuple['idP'];
	 ?>	

	<div id="container_production_admin">
		<div class="gauche_production">
			<p>Nom : <?php echo "$tuple[nomP]"; ?><p>
		</div>

		<div class="image_production_admin">
			<p><?php  echo"<img src=\"../Images/" . $tuple['imageP'] . "\"/ width=\"70\" height=\"50\">"?></p>
		</div>

		<div class="droite_production_admin">
			<p>Description : <?php echo "$tuple[descriptionP]"; ?></p>
		</div>

		<div class="dessous_production_admin">
			<p>Prix : <?php echo "$tuple[prixP]"; ?></p>
		</div>	
	</div>

		<div class="suppr_message">
			<p> <?php echo"<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Produit'/>
        </button></td></tr>"; ?></p>
		</div>

<?php
	} 
		?>
<br />

<h2>Ajout d'une production</h2>
<hr />
	
	<form method="POST" action="./controlAddProduc.php" enctype="multipart/form-data">
		<fieldset>
			<label>Nom :</label><input type="text" name="nomP" required><br />
			<label>Description :</label><input type="text" name="descriptionP" required><br />

			<label for="image">Image (JPG, PNG ou GIF) :</label><br />
			<input type="file" name="image" id="icone" required/><br />
			<input type="hidden" name="MAX_FILE_SIZE" value="104857600" />

			<label>Prix :</label><input type="text" name="prixP" required><br />
			
			<input type="submit" value="Ajouter"><br />
		</fieldset>
	</form>
	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>
