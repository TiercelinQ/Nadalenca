	<h1>Productions</h1>
	<hr />

	<h3>Voici les différentes productions que l'association Nadalenca a produit.</h3>
<?php
include("../Modele/Production.php");
	while ($tuple = mysql_fetch_array($res))
	{ ?>	
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
	</div>
<?php
	} 
		?>
<br />

	</div>


