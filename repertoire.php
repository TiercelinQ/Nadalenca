<?php
	
	include("./menu.php");
	include("./config.php");
?>
	<form method="post" action="./Controleur/controlRepertoire.php">
		<fieldset>
		<label>Recherche :</label>
		<input type="text" placeholder="Ex : Nadalet" name="recherche">
		<input type="submit" value="Ok" />
		</fieldset>
	</form>
<?php
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );


while ($tuple = mysql_fetch_array($res))
	{
?>	
	<a href="./Vue/viewRepertoire.php?nomR=<?php echo $tuple['nomR']; ?>"> <?php echo $tuple['nomR']; ?></a></br>
<?php
	}

	
	include("./footer.php");
?>

