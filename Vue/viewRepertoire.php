
	<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE nomR = '$nom'") or die ("Erreur insertion, viewRepertoire, res");
	$tuple = mysql_fetch_array($res);
	?>
	<p> Nom du morceau : <?php echo $tuple['nomR']; ?> </p>
	<p> Piste audio : </p>
	<audio src="../Audio/<?php echo $tuple['audioR']; ?>" controls >Veuillez mettre à jour votre navigateur !</audio>
	<p> Parole du morceau (au format PDF) :</p>
	<a href="../Texte/<?php echo $tuple['texteR']; ?>" target="_blank">Texte</a>
	<p> Differents types de Voix : </p>
	<a href="../Voix/Voix1/<?php echo $tuple['voix1R']; ?>" target="_blank">Voix1</a></br>
	<a href="../Voix/Voix2/<?php echo $tuple['voix2R']; ?>" target="_blank">Voix2</a></br>
	<a href="../Voix/Voix3/<?php echo $tuple['voix3R']; ?>" target="_blank">Voix3</a></br>
	<a href="../Voix/Voix4/<?php echo $tuple['voix4R']; ?>" target="_blank">Voix4</a>
	
	
	
