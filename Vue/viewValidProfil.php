<!DOCTYPE html>
<html>
    <head>
   	 	<meta charset="utf-8" />
   	 	<title>Profil de <?php echo ($profil->getPrenom());?></title>
   	 	<link rel="stylesheet" type="text/css" href="../style.css" />
    </head>


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
				<th>Statut</th>
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
				<th><?php echo $profil->getStatut();?></th>
			</tr>
   	 		</table>

        <hr />
        <h2>Pour modifier vos informations :</h2>
        <form method="post" action="./controlChangement.php" >
            <fieldset>
                <legend>Changement d'informations </legend>
				<input type="hidden" name="id" value="<?php echo $profil->getId()?>"/>
                <label>Nom</label> :
                  <input type="text" name="nom" value="<?php echo $profil->getNom()?>"/>
                <label>Prénom</label> :
                  <input type="text" name="prenom" value="<?php echo $profil->getPrenom()?>"/><br />
                  <input type="hidden" name="email" value="<?php echo $profil->getEmail()?>"/>
                <label>Ancien mot de passe</label> : 
                  <input type="password" placeholder="Ex : licorne" name="mdpold"/>
                <label>Nouveau mot de passe</label> : 
                  <input type="password" placeholder="Ex : licorne" name="mdpnew"/>
                <label>Confirmation du mot de passe</label> : 
                  <input type="password" placeholder="Ex : licorne" name="mdpnewconf"/> <br />
                <label>Adresse</label> : 
                  <input type="text" name="adresseP" value="<?php echo $profil->getAdresseP()?>" />
                <label>Code Postal</label> : 
                  <input type="text" name="codeP" value="<?php echo $profil->getCodeP()?>" />
                <label>Ville</label> : 
                  <input type="text" name="ville" value="<?php echo $profil->getVille()?>"/> <br />
                <label>Numéro de téléphone fixe</label> : 
                  <input type="int" name="numtelF" value="<?php echo $profil->getNumtelF()?>"/>
                <label>Numéro de téléphone portable</label> : 
                  <input type="int" name="numtelM" value="<?php echo $profil->getNumtelM()?>"/> <br />
                <label>Type de voix </label> : <select name="voix">
                    <option value="voix1" <?php if ($profil->getVoix() =="voix1") {echo "selected";} ?> > Voix 1 
                    <option value="voix2" <?php if ($profil->getVoix() =="voix2") {echo "selected";} ?> > Voix 2
                    <option value="voix3" <?php if ($profil->getVoix() =="voix3") {echo "selected";} ?> > Voix 3
                    <option value="voix4" <?php if ($profil->getVoix() =="voix4") {echo "selected";} ?> > Voix 4
                </select>  <br /> 
                <label>Statut</label> :
				<select name="statut" type ="hidden">
					<option value="Adhérent" <?php if ($profil->getStatut() =="Adhérent") {echo "selected";} ?> > Adhérent
					<option value="Membre du conseil d'administration" <?php if ($profil->getStatut() =="Membre du conseil d'administration") {echo "selected";} ?> > Membre du conseil d'administration
					<option value="Secrétaire" <?php if ($profil->getStatut() =="Secrétaire") {echo "selected";} ?> > Secrétaire
					<option value="Secrétaire adjoint" <?php if ($profil->getStatut() =="Secrétaire adjoint") {echo "selected";} ?> > Secrétaire adjoint
					<option value="Trésorier" <?php if ($profil->getStatut() =="Trésorier") {echo "selected";} ?> > Trésorier
					<option value="Trésorier adjoint" <?php if ($profil->getStatut() =="Trésorier adjoint") {echo "selected";} ?> > Trésorier adjoint
					<option value="Président" <?php if ($profil->getStatut() =="Président") {echo "selected";} ?> > Président
					<option value="Vice-Président" <?php if ($profil->getStatut() =="Vice-Président") {echo "selected";} ?> > Vice-Président	
				</select>  <br />
                <input type="submit" value="Modifier" />
            </fieldset>
        </form>