<?php
	//On récupère la Classe Recrutement
	include ("../Modele/Recrutement.php");
	
	//On vérifie ce qui a été récupéré
	if(isset($_GET['idR']))
	{
		//La valeur $idR prend le contenu de ce qui a été récupéré
		$idR = $_GET['idR'];
		//Vérification si le message existe en appelant la fonction existId de la classe Recrutement
		if(Recrutement::existId($idR))
		{
			//Appel de la fonction delete de la classe Recrutement
			Recrutement::delete($idR);
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlRecrutAdmin.php");
		}
		else
		{
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlRecrutAdmin.php");
		}
	}
	else
	{
		//Redirection vers la page des messages reçus de la session admin
		header("Location:./controlRecrutAdmin.php");
	}
?>