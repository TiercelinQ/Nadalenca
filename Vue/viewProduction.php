	<h1>Productions</h1>
	<hr />

	<h3>Voici les différentes produits que l'association Nadalenca propose.</h3>
<?php
include("../Modele/Production.php");
	while ($tuple = mysql_fetch_array($res))
	{ ?>	
	<div id="container_production">
		<div class="gauche_production">
			<p>Nom : <?php echo "$tuple[nomP]"; ?></p>
		</div>

		<div class="image_production">
			<p><?php  echo"<img src=\"../Images/" . $tuple['imageP'] . "\"/>"?></p>
		</div>

		<div class="droite_production"> <!--nom temporaire pour citer l'incrustation de l'image dans la description -->
			<?php echo "$tuple[descriptionP]"; ?>
		</div>

		<div class="dessous_production">
			<p>Prix : <?php echo "$tuple[prixP]"; ?></p>
		</div>
	</div>
<?php
	} 
		?>
<br />


