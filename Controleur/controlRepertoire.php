<!DOCTYPE html>
<?php
include ("./menu.php");
include ("../Modele/Repertoire.php");


$nom = htmlspecialchars($_POST['recherche']);
$req = "SELECT * FROM repertoire WHERE nomR LIKE '%$nom%' ORDER BY idR DESC";
$res = mysql_query($req) or die ("Erreur insertion, Controleur Repertoire, Fonction Recherche" );
$nb_resultats = mysql_num_rows($res);

if($nb_resultats != 0)
{
?>
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

		<a href="repertoire.php">Faire une nouvelle recherche </a></br>
	
<?php
}
else
{
?>
		<h3>Pas de résultats</h3> </br>
		<a href="repertoire.php">Réessayez</a> avec autre chose.</p>
<?php

}
include("./footer.php");
?>