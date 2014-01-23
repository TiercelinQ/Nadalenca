<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un fichier texte</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
</head>
<?php
	//On inclue le menu
	include("./menu.php");
	//On inclue le modele
	include("../Modele/Repertoire.php");
	//On récupere les données passés en parametre avec ici le nb qui represente le numéro du fichier ajouté
	$id = $_POST['id'];
	$nb = $_POST['nb'];
	switch($nb)
	{
		case 1:
			$erreur = $_FILES['texte1']['error'];
			break;
		case 2:
			$erreur = $_FILES['texte2']['error'];
			break;
		case 3:
			$erreur = $_FILES['texte3']['error'];
			break;
		case 4:
			$erreur = $_FILES['texte4']['error'];
			break;
		case 5:
			$erreur = $_FILES['texte5']['error'];
			break;
	}
	$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];	
	if($erreur == 4 )
	{ 
		include("../Vue/viewModifMorAjoutTexteEmpty.php");
	}
	//On fait un appel de fonction en fonction du numéro de ficher ajouté
	else
	{
		switch($nb)
		{
			case 1:
				$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1']);
				break;
			case 2:
				$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte2']['name'], $_FILES['texte2']['name'], $_POST['ttexte2']);
				break;
			case 3:
				$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte3']['name'],$_FILES['texte3']['name'], $_POST['ttexte3']);
				break;
			case 4:
				$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte4']['name'],$_FILES['texte4']['name'], $_POST['ttexte4']);
				break;
			case 5:
				$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte5']['name'],$_FILES['texte5']['name'], $_POST['ttexte5']);
				break;
		}
		//On inclue les differentes vues en fonction du resultat de ajoutFichierTexte
		if($rep ==true)
		{
			include("../Vue/viewModifMorAjoutTexte.php");
		}
		else
		{
			include("../Vue/viewModifMorAjoutTexteErr.php");
		}
	}
	//On inclue le pied de page
	include("./footer.php");
?>