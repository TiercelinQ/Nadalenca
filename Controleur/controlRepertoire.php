<?php
include ("./config.php");
include("./menu.php");

$nom = htmlspecialchars($_POST['nom']);
$req = "SELECT * FROM repertoire WHERE nomR LIKE '%$nom%' ORDER BY idR DESC";
$res = mysql_query($req) or die ("Erreur insertion, Controleur Repertoire, Fonction Recherche" );
$nb_resultats = mysql_num_rows($res);

if($nb_resultats != 0)
{
?>
	<h3>Résultats de votre recherche.</h3>
	<p>Il y a <? echo $nb_resultats; // on affiche le nombre de résultats 
	if($nb_resultats > 1) { echo 'des morceaux'; } else { echo 'un morceau'; } // on vérifie le nombre de résultats pour orthographier correctement. 
	?>
	correspondant a votre critère :<br/>
<br/>
<?
