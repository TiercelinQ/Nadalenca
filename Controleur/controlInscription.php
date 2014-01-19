<!-- On inclut le fichier config pour accéder à la base de données-->
<?php include("config.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="../style.css" />

		<script>
			function verifMDP()
			{
			// fonction JS de verification du mot de passe et du mot de passe confirmation 
			//  + verification saisie bon mot de passe "nadalenca", en dur pour l'instant, peut être à mettre dans la BDD
				mdp1 = document.forminscrip.mdp.value;	// recuperation variables
				mdp2 = document.forminscrip.mdpc.value;
				mdpn = document.forminscrip.mdpn.value;
				// si différentes :
				if ( mdp1 != mdp2 )
				{
					window.alert('Vos deux mots de passe ne sont pas identiques');	//pop up explicatif
					return false;
				}
				// si identiques
				// si nadalenca different
				else if (mdpn != "nadalenca")
				{
					window.alert('Le mot de passe Nadalenca est faux');		//pop up explicatif
					return false;
				}
				// si tous les mdp sont ok
				else
				{
					return true;
				}
			}
		</script> 
</head>
	
<?php 
	//On inclut le menu en fonction de la session en cours
	include("./menu.php");
	//On inclut la vue d'affichage de la page pour s'inscrire
	include("../Vue/viewInscription.php");
	//On inclut le footer
	include("./footer.php");
?>