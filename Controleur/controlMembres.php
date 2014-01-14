<?php
include ("./config.php");
include("./menu.php"); 


	$req="SELECT * from utilisateur"; // requete
	$res =mysql_query($req); // envoi de la requete
	if(isset($_SESSION['login']))
	{
	include("../Vue/viewMembre.php");
	}
	else
	{
	include("../Vue/viewMembreAdmin.php");
	}

		
	require("./footer.php");
?>