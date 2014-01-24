<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'une Piste audio</title>
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
		//On récupere les données passès en paramètre avec ici le nb qui représente le numéro du fichier à ajouter
		$id = $_POST['id'];
		$nb = $_POST['nb'];
		switch($nb)
		{
			case 1:
				$erreur = $_FILES['audio1']['error'];
				break;
			case 2:
				$erreur = $_FILES['audio2']['error'];
				break;
			case 3:
				$erreur = $_FILES['audio3']['error'];
				break;
			case 4:
				$erreur = $_FILES['audio4']['error'];
				break;
			case 5:
				$erreur = $_FILES['audio5']['error'];
				break;
		}
		$res = mysql_query("SELECT * FROM repertoire WHERE idA ='$id'") or die ("Erreur /controlModifAjouttexte / res");
		$tuple = mysql_fetch_array($res);
		$idr = $tuple['idr'];	
		if($erreur == 4 )
		{ 
			include("../Vue/viewModifMorAjoutAudioEmpty.php");
		}
		//On fait les appels en fonction du numéro du fichier qui est envoyé en paramètre
		else 
		{	$extensions_valides = array( 'mp3','aac', 'ogg', 'wav');
			//1. strrchr renvoie l'extension avec le point (« . »).
			//2. substr(chaine,1) ignore le premier caractère de chaine.
			//3. strtolower met l'extension en minuscules
			
			switch($nb)
			{
				case 1:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['audio1']['name'], '.')  ,1)  );
					break;
				case 2:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['audio2']['name'], '.')  ,1)  );
					break;
				case 3:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['audio3']['name'], '.')  ,1)  );
					break;
				case 4:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['audio4']['name'], '.')  ,1)  );
					break;
				case 5:
					$extension_upload = strtolower(  substr(  strrchr($_FILES['audio5']['name'], '.')  ,1)  );
					break;
			}
			if(!(in_array($extension_upload,$extensions_valides)))
			{	
				include("../Vue/viewModifMorAjoutAudioExt.php");
			}
			else
			{
				switch($nb)
				{
					case 1:
						$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio1']['name'], $_FILES['audio1']['tmp_name'], $_POST['taudio1'], $extension_upload);
						break;
					case 2:
						$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio2']['name'], $_FILES['audio2']['tmp_name'], $_POST['taudio2'], $extension_upload);
						break;
					case 3:
						$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio3']['name'], $_FILES['audio3']['tmp_name'], $_POST['taudio3'], $extension_upload);
						break;
					case 4:
						$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio4']['name'], $_FILES['audio4']['tmp_name'], $_POST['taudio4'], $extension_upload);
						break;
					case 5:
						$rep = Repertoire::ajoutFichierAudio($id, $nb, $_FILES['audio5']['name'], $_FILES['audio5']['tmp_name'], $_POST['taudio5'], $extension_upload);
						break;
				}
				//On inclue les differentes vues en fonction du résultat ajoutFichierAudio qui renvoie un boolean
				if($rep ==true)
				{
					include("../Vue/viewModifMorAjoutAudio.php");
				}
				else
				{
					include("../Vue/viewModifMorAjoutAudioErr.php");
				}
			}
		}
	}
	else
	{
		header('Location:../index.php');
	}
	//On inclue le pied de page
	include("./footer.php");
?>