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
	//On vérifie que l'administrateur soir connecté
	if(isset($_SESSION['login']) && isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
	{
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
			$extensions_valides = array( 'pdf', 'doc');
			//1. strrchr renvoie l'extension avec le point (« . »).
			//2. substr(chaine,1) ignore le premier caractère de chaine.
			//3. strtolower met l'extension en minuscules
			switch($nb)
			{
				case 1:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['texte1']['name'], '.')  ,1)  );
					break;
				case 2:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['texte2']['name'], '.')  ,1)  );
					break;
				case 3:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['texte3']['name'], '.')  ,1)  );
					break;
				case 4:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['texte4']['name'], '.')  ,1)  );
					break;
				case 5:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['texte5']['name'], '.')  ,1)  );
					break;
			}
			if(!(in_array($extension_upload,$extensions_valides)))
			{	
				include("../Vue/viewModifMorAjoutTexteExt.php");
			}
			else 
			{
				switch($nb)
				{
					case 1:
						$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte1']['name'], $_FILES['texte1']['tmp_name'], $_POST['ttexte1'], $extension_upload);
						break;
					case 2:
						$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte2']['name'], $_FILES['texte2']['tmp_name'], $_POST['ttexte2'], $extension_upload);
						break;
					case 3:
						$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte3']['name'],$_FILES['texte3']['tmp_name'], $_POST['ttexte3'], $extension_upload);
						break;
					case 4:
						$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte4']['name'],$_FILES['texte4']['tmp_name'], $_POST['ttexte4'], $extension_upload);
						break;
					case 5:
						$rep = Repertoire::ajoutFichierTexte($id, $nb, $_FILES['texte5']['name'],$_FILES['texte5']['tmp_name'], $_POST['ttexte5'], $extension_upload);
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
		}
	}
	else
	{
		//Sinon, on renvoie à la page d'acceuil
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>