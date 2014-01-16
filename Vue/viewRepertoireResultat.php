<h1>Résultat de votre recherche</h1>	
<hr />

<p>Il y a <?php echo $nb_resultats; // on affiche le nombre de résultats 
if($nb_resultats > 1) { echo ' morceaux'; } else { echo ' morceau'; } // on vérifie le nombre de résultats pour orthographier correctement. 
	?>
		correspondant a votre critère :<br/>
		<br/>
<?php
			while ($tuple = mysql_fetch_array($res))
			{
		?>	
			<div id="morceau">
			<a href="../Controleur/controlRepertoireMorceau.php?idr=<?php echo $tuple['idr']; ?>"><?php echo $tuple['nom']; ?></a>
			</div>
			</br>
		<?php
			}
?>

		<a href="../Controleur/controlRepertoire.php">Faire une nouvelle recherche </a></br>
	
