<?php
	
	include("./menu.php");
?>
	<form method="post" action="./Controleur/controlRepertoire.php">
		<fieldset>
		<legend>Recherche :</legend>
		<label>Recherche :</label>
		<input type="text" placeholder="Ex : Nadalet" name="recherche">
		<input type="submit" value="Ok" />
		</fieldset>
	</form>
<?
$req = "SELECT * FROM repertoire";
$res = mysql_query($req) or die ("Erreur insertion, repertoire.php, affichage de tout" );


while ($tuple = mysql_fetch_array($res))
	{
?>	
	<a href="./Vue/viewRepertoire.php?nomR=<? echo $tuple['nomR'];?>"><? echo $tuple['nomR'];?></a></br>
<?
	}

	
	include("./footer.php");
?>

