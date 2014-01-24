<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un morceau</title>
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
		//On vérifie que l'administrateur soir connecté
		if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
		{
			$id = $_POST['id'];
			//On va récupérer dans la base de données l'id du tuple du répertoire pour la redirection dans le include
			$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
			$tuple = mysql_fetch_array($res);
			$idr = $tuple['idr'];
			if($_FILES['texte']['error']!=4)
			{
				$extensions_valides = array( 'pdf', 'doc');
				//On récupère l'extension du fichier
				$extension = strtolower(  substr(  strrchr($_FILES['texte']['name'], '.')  ,1)  );
				//Si l'extension n'est pas pris en charge, on envoie vers un page d'erreur qui redirige vers la page du morceau
				if(!(in_array($extension,$extensions_valides)))
				{
					include("../Vue/viewModificationMorTexteExt.php");
				}
				else
				{
					//On récupère les informations du formulaire
					$texte = $_FILES['texte']['name'];
					$textetmp = $_FILES['texte']['tmp_name'];
					$dest = $_POST['textedest'];
					$nb = $_POST['nb'];
					

					//Appel de la fonction changementtextenb de la classe Repertoire
					$morceau = Repertoire::changementtextenb($id, $nb, $texte,$textetmp, $dest, $extension);

					//On inclue les differentes vues en fonction de la réponse de changementtextenb qui renvoie un boolean
					if($morceau == true)
					{
						include("../Vue/viewModicationMorTexte.php");
					}
					else
					{	
						include("../Vue/viewModificationMorTexteErr.php");
					}
				}
			}
			//Si il n'y a aucun fichier mis dans le formulaire
			else
			{
				include("../Vue/viewModificationMorTexteEmpty.php");
			}
		}
		else
		{
			//Sinon, on renvoie à la page d'accueil
			header('Location : ../index.php');
		}
	}
	else
	{
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>