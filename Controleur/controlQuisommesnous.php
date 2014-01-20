<!DOCTYPE html>
<html>
	<head>
		<title>Qui sommes-nous ?</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />
	</head>
	
<?php
//On inclut le fichier config pour accéder à la base de données
include ("./config.php");
//On inclut le menu en fonction de la session en cours
include("./menu.php"); 

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de président
	$req="SELECT * from utilisateur where statut='President' ";
	//On execute la requête
	$res =mysql_query($req);

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de vice-president
	$req1="SELECT * from utilisateur where statut='Vice-President' ";
	//On execute la requête
	$res1 =mysql_query($req1);

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de tresorier
	$req2="SELECT * from utilisateur where statut='Tresorier' ";
	//On execute la requête
	$res2 =mysql_query($req2);

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de tresorier adjoint
	$req3="SELECT * from utilisateur where statut='Tresorier adjoint' ";
	//On execute la requête
	$res3 =mysql_query($req3);

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de Secretaire
	$req4="SELECT * from utilisateur where statut='Secretaire' ";
	//On execute la requête
	$res4 =mysql_query($req4);

	//Requête permettant d'afficher les informations d'un utilisateur qui a le statut de Secretaire adjoint
	$req5="SELECT * from utilisateur where statut='Secretaire adjoint' ";
	//On execute la requête
	$res5 =mysql_query($req5);

	
	//On inclut la vue d'affichage des concerts
	include ("../Vue/viewQuisommesnous.php");	
	//On inclut le footer
	require("./footer.php");
?>

