<?php
	//On récupère la Class Message
	include ("../Modele/Message.php");
	
	//On vérifie ce qui a été récupéré
	if(isset($_GET['idM']))
	{
		//La valeur $idM prend le contenu de ce qui a été récupéré
		$idM = $_GET['idM'];
		//Vérification si le message existe par $idM
		if(Message::existId($idM))
		{
			//Création d'un constructeur en rapport avec la fonction delete
			Message::delete($idM);
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlMessagesrecus.php");
		}
		else
		{
			//Redirection vers la page des messages reçus de la session admin
			header("Location:./controlMessagesrecus.php");
		}
	}
	else
	{
		//Redirection vers la page des messages reçus de la session admin
		header("Location:./controlMessagesrecus.php");
	}
?>
