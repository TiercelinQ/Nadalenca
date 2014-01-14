<?php
include ("./config.php");
include("./menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete
	if(isset($_SESSION['login']))
	{
	include("../Vue/viewMembreAdmin.php");
	}
	else
	{
	include("../Vue/viewMembre.php");
	}

		
	require("./footer.php");
?>