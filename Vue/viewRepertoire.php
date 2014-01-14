
	<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE nomR = '$nom'") or die ("Erreur insertion, viewRepertoire, res");
	
	$tuple = mysql_fetch_array($res);
	
	echo $tuple['idR'].$tuple['nomR'].$tuple['texteR'];
	
	?>
	<audio src="../audio/<?php echo $tuple['audioR']; ?>" controls > ici lolz </audio>
	<iframe src="../texte/<?php echo $tuple['texteR']; ?>" width="800" height="600"></iframe>
	
	
	
