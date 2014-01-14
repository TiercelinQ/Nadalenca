
	<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE nomR = '$nom'") or die ("Erreur insertion, viewRepertoire, res");
	
	$tuple = mysql_fetch_array($res);
	
	echo $tuple['idR'].$tuple['nomR'].$tuple['texteR'];
	
	?>
