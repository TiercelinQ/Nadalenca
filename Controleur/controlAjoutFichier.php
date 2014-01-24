<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un morceau</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
		//On récupere le nom passé en paramètre
		$nom = addslashes(htmlspecialchars($_POST['nomR']));
		if($_FILES['audio1']['error'] == 4)
		{
			//On fait appel à la fonction createaudio qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
			$extension = "null";
			$rep = Repertoire::createaudio($nom,0,"null","null","null", $extension);
		}
		else
		{
			//On fait appel à la fonction createaudio qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
			$extension = strtolower(  substr(  strrchr($_FILES['audio1']['name'], '.')  ,1)  );
			$rep = Repertoire::createaudio($nom,1,$_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1']);
		}
		if($_FILES['texte1']['error'] == 4)
		{
			//On fait appel à la fonction createaudio qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
			$extension = "null";
			$rep = Repertoire::createtexte($nom,0,"null","null","null", $extension);
		}
		else
		{
			//On fait appel à la fonction createtexte qui déplace le fichier sur le serveur et crée un nouveau tuple dans la base de données
			$extension = strtolower(  substr(  strrchr($_FILES['texte1']['name'], '.')  ,1)  );
			$rep = Repertoire::createtexte($nom,$nbt,$_FILES['texte1']['name'],$_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
		}
		//On fait appel à la fonction createRep qui crée un nouveau tuple dans le base de données.
		$rep = Repertoire::createRep($nom);
		//On inclue la vue
		include("../Vue/viewAjoutFichierReussi.php");
	}
	else
	{
		//Sinon, on renvoie vers la page d'accueil
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>

