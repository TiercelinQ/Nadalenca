<?php
	//On récupère la Class Production
	include ("../Modele/Production.php");
	
	//Vérification de ce qui a été récupéré dans idP
	if(isset($_GET['idP']))
	{
		//La valeur $idP prend ce qui a été récupéré
		$idP = $_GET['idP'];
		//Vérification si la production existe en fonction de $idP
		if(Production::existId($idP))
		{
			//Créatin d'un construction en rapport avec la fonction delete
			Production::delete($idP);
			//Redirection vers la page des productions de la session admin
			header("Location:./controlProductionAdmin.php");
		}
	}
	else
	{
		//Redirection vers la page des productions de la session admin
		header("Location:./controlProductionAdmin.php");
	}
?>
