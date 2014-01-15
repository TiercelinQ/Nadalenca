
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
	<a href="../Voix/alto/<?php echo $tuple['altoR']; ?>" target="_blank">alto</a></br>
	<a href="../Voix/basse/<?php echo $tuple['basseR']; ?>" target="_blank">basse</a></br>
	<a href="../Voix/soprano/<?php echo $tuple['sopranoR']; ?>" target="_blank">soprano</a></br>
	<a href="../Voix/tenor/<?php echo $tuple['tenorR']; ?>" target="_blank">tenor</a>
	
	
	
