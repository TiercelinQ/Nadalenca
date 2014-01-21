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
	//On fait un appel de fonction en fonction du numéro de ficher ajouté
	switch($nb)
	{
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
	$res = mysql_query("SELECT * FROM repertoire WHERE idT ='$id'") or die ("Erreur /controlModifAjouttexte / res");
	$tuple = mysql_fetch_array($res);
	$idr = $tuple['idr'];
	//On inclue les differentes vues en fonction du resultat de ajoutFichierTexte
	if($rep ==true)
	{
		include("../Vue/viewModifMorAjoutTexte.php");
	}
	else
	{
		include("../Vue/viewModifMorAjoutTexteErr.php");
	}
	//On inclue le pied de page
	include("./footer.php");
?>