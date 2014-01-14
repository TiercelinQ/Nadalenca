<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<title>Répertoire</title>
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>	
	
		
	<form method="post" action="./controlRepertoire.php">
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
	<a href="../Vue/viewRepertoire.php?nomR=<?php echo $tuple['nomR']; ?>"> <?php echo $tuple['nomR']; ?></a></br>
<?php
	}
?>