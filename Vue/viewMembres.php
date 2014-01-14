<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<title><?php echo strtoupper($profil->getNom());?></title>
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

	<?php include("../menu.php"); ?>

			<h3>Profil de <?php echo $profil->getPrenom();?></h3>
			<hr />
           
		   <table border="1">
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
        		<th>Mot de Passe</th>
        		<th>Adresse Postale</th>
        		<th>Code Postal</th>
        		<th>Ville</th>
        		<th>N° de téléphone fixe</th>
        		<th>N° de téléphone mobile</th>
        		<th>Type de voix</th>
			</tr>
   	 		<tr>
   	 			<th><?php echo $profil->getNom();?></th>
   	 			<th><?php echo $profil->getPrenom();?></th>
   	 			<th><?php echo $profil->getEmail();?></th>
          		<th><?php echo $profil->getMdp();?></th>
          		<th><?php echo $profil->getAdresseP();?></th>
          		<th><?php echo $profil->getCodeP();?></th>
          		<th><?php echo $profil->getVille();?></th>
          		<th><?php echo $profil->getnumtelF();?></th>
          		<th><?php echo $profil->getnumtelM();?></th>
          		<th><?php echo $profil->getVoix();?></th>
   	 		</tr>
   	 		</table>

        <hr />

<?php include("../footer.php"); ?>  