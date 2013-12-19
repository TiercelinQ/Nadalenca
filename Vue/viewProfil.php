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
        <h2>Pour moifier vos informations :</h2>
        <form method="post" action="./controleur/'nomcontroleur'.php" >
            <fieldset>
                <legend>Changement information </legend>
                <label>Email </label> : <input type="text" name="email" value="<?php echo $profil->getEmail()?>"/>
                  <input type="hidden" name="nom" value="<?php echo $profil->getNom()?>"/>
                  <input type="hidden" name="prenom" value="<?php echo $profil->getPrenom()?>"/>
                  <input type="hidden" name="admin" value="<?php echo $profil->getAdmin()?>"/><br />
                <label>Ancien mot de passe </label> : <input type="password" placeholder="Ex : licorne" name="mdpold"/>
                <label>Nouveau mot de passe </label> : <input type="password" placeholder="Ex : licorne" name="mdpnew"/>
                <label>Confirmaion mot de passe </label> : <input type="password" placeholder="Ex : licorne" name="mdpnewconf"/>
                  <input type="hidden" name="statut" value="<?php echo $profil->getStatut()?>"/><br />
                <Label>Adresse </label> : <input type="text" name="adresseP" value="<?php echo $profil->getAdresseP()?>" />
                <label>Code Postal </label> : <input type="text" name="codeP" value="<?php echo $profil->getCodeP()?>" />
                <label>Ville </label> : <input type="text" name="ville" value="<?php echo $profil->getVille()?>"/> <br />
                <label>Numéro de téléphone fixe </label> : <input type="int" name="numtelF" value="<?php echo $profil->getNumtelF()?>"/>
                <label>Numéro de téléphone portable </label> : <input type="int" name="numtelM" value="<?php echo $profil->getNumtelM()?>"/> <br />
                <label>Type de voix </label> : <select name="voix">
                    <option value="voix1"> Voix 1 
                    <option value="voix2"> Voix 2
                    <option value="voix3"> Voix 3
                    <option value="voix4"> Voix 4
                </select>  <br />
                <input type="submit" value="Modifier" />
            </fieldset>
        </form>

<?php include("../footer.php"); ?>  