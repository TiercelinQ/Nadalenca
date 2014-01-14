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
	include("../Vue/viewRep.php");
}
else
{
	include("../Vue/viewNoRep.php");
}
include("./footer.php");
?>