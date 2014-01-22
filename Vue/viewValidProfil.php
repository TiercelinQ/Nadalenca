<title>Profil de <?php echo ($profil->getPrenom());?></title>
      <h1>Profil de <?php echo $profil->getPrenom();?></h1>
			<hr />
           
		<table border="1">
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
				<th>Adresse Postale</th>
				<th>Code Postal</th>
				<th>Ville</th>
				<th>N° de téléphone fixe</th>
				<th>N° de téléphone mobile</th>
				<th>Type de voix</th>
        <th>Statut</th>
			</tr>
   	 	<tr>
				<td><?php echo $profil->getNom();?></td>
   	 		<td><?php echo $profil->getPrenom();?></td>
   	 		<td><?php echo $profil->getEmail();?></td>
				<td><?php echo $profil->getAdresseP();?></td>
				<td><?php echo $profil->getCodeP();?></td>
				<td><?php echo $profil->getVille();?></td>
				<td><?php echo $profil->getnumtelF();?></td>
				<td><?php echo $profil->getnumtelM();?></td>
				<td><?php echo $profil->getVoix();?></td>
        <td><?php echo $profil->getStatut();?></td>
			</tr>
   	</table>

  <h2>Pour modifier vos informations :</h2>
  <hr />
    <form method="post" action="./controlChangement.php" >
      <fieldset>
            <!--type hidden permet d'éviter de toucher les données de la base de donnée.-->
            <input type="hidden" name="id" value="<?php echo $profil->getId()?>"/>
          <label>Nom :</label><input type="text" name="nom" value="<?php echo $profil->getNom()?>"/> <br />
          <label>Prénom :</label><input type="text" name="prenom" value="<?php echo $profil->getPrenom()?>"/><br />
            <!--type hidden permet d'éviter de toucher les données de la base de donnée.-->
            <input type="hidden" name="email" value="<?php echo $profil->getEmail()?>"/>
          <label>Ancien mot de passe :</label><input type="password"  name="mdpold"/><br />
          <label>Nouveau mot de passe :</label><input type="password"  name="mdpnew"/><br />
          <label>Confirmation du mot de passe: </label><input type="password" name="mdpnewconf"/><br />
          <label>Adresse :</label><input type="text" name="adresseP" value="<?php echo $profil->getAdresseP()?>" /><br />
          <label>Code Postal :</label><input type="text" name="codeP" value="<?php echo $profil->getCodeP()?>" /><br />
          <label>Ville :</label><input type="text" name="ville" value="<?php echo $profil->getVille()?>"/><br />
          <label>Numéro de téléphone fixe :</label><input type="int" name="numtelF" value="<?php echo $profil->getNumtelF()?>"/><br />
          <label>Numéro de téléphone portable :</label><input type="int" name="numtelM" value="<?php echo $profil->getNumtelM()?>"/> <br />
          <label>Type de voix :</label>
          <select name="voix">
              <option value="Alto" <?php if ($profil->getVoix() == "Alto") {echo "selected";} ?> > Alto 
              <option value="Basse" <?php if ($profil->getVoix() == "Basse") {echo "selected";} ?> > Basse
              <option value="Soprano" <?php if ($profil->getVoix() == "Soprano") {echo "selected";} ?> > Soprano
              <option value="Tenor" <?php if ($profil->getVoix() == "Tenor") {echo "selected";} ?> > Tenor
              </select><br /> 
          <label>Statut :</label>
            <select name="statut">
              <option value="President" <?php if ($profil->getStatut() == "President") {echo "selected";} ?> > Président 
              <option value="Vice-President" <?php if ($profil->getStatut() == "Vice-President") {echo "selected";} ?> > Vice-Président
              <option value="Tresorier" <?php if ($profil->getStatut() == "Tresorier") {echo "selected";} ?> > Trésorier
              <option value="Tresorier Adjoint" <?php if ($profil->getStatut() == "Tresorier Adjoint") {echo "selected";} ?> > Trésorier Adjoint
              <option value="Secretariat" <?php if ($profil->getStatut() == "Secretariat") {echo "selected";} ?> > Secrétariat
              <option value="Secretariat Adjoint" <?php if ($profil->getStatut() == "Secretariat Adjoint") {echo "selected";} ?> > Secrétariat Adjoint
              <option value="Membre du Conseil d'Administration" <?php if ($profil->getStatut() == "Membre du Conseil d'Administration") {echo "selected";} ?> > Membre du Conseil d'Administration
              <option value="Adherent" <?php if ($profil->getStatut() == "Adherent") {echo "selected";} ?> > Adhérent
            </select><br /> 
            <input type="submit" value="Modifier" />
          </fieldset>
        </form>
