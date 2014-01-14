<?php
include ("./config.php");
include("./menu.php"); 

	$req="SELECT * from concert where dateC>now() order by dateC ASC "; // requête 
	$res1 =mysql_query($req); // envoi de la requete
	

	$req="SELECT * from concert where dateC<now() order by dateC ASC "; // requête 
	$res2 =mysql_query($req); // envoi de la requete
		
	include ("../Vue/viewConcert.php");	
	require("./footer.php");
?>

