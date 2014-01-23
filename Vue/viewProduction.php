	<h1>Productions</h1>
	<hr />

	<h3>Voici les différentes produits que l'association Nadalenca propose.</h3>
<?php
include("../Modele/Production.php");
	while ($tuple = mysql_fetch_array($res))
	{ ?>	
	<div id="container_production">
		<div class="gauche_production">
			<p><strong>Nom : </strong><?php echo "$tuple[nomP]"; ?></p>
		</div>

		<div class="image_production">
			<p><?php  echo"<img src=\"../Images/" . $tuple['imageP'] . "\"/>"?></p>
		</div>

		<div class="droite_production"> <!--nom temporaire pour citer l'incrustation de l'image dans la description -->
			<p><strong>Description : </strong><br /><?php echo "$tuple[descriptionP]"; ?></p>
		</div>

		<div class="dessous_production">
			<p><strong>Prix : </strong><?php echo "$tuple[prixP]"; ?></p>
		</div>
	</div>
<?php
	} 
		?>
<br />


