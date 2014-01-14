<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<title>Répertoire</title>
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>
	
	
	
	<h3>Résultats de votre recherche.</h3>
	<p>Il y a <?php echo $nb_resultats; // on affiche le nombre de résultats 
	if($nb_resultats > 1) { echo ' morceaux'; } else { echo ' morceau'; } // on vérifie le nombre de résultats pour orthographier correctement. 
	?>
		correspondant a votre critère :<br/>
		<br/>
<?php
			while ($tuple = mysql_fetch_array($res))
			{
		?>	
			<a href="../Vue/viewRepertoire.php?nomR=<?php echo $tuple['nomR']; ?>"><?php echo $tuple['nomR']; ?></a></br>
		<?php
			}
?>

		<a href="../Controleur/controleurMainRep.php">Faire une nouvelle recherche </a></br>
	
