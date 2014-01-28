<title><?php echo ($concert->getTitreC());?></title>
      <h1><?php echo ($concert->getTitreC());?></h1>
			<hr />
           
		<table border="1">
			<tr>
      <th>Titre Concert</th>
      <th>Date</th>
      <th>Heure</th>
      <th>Minute</th>
      <th>Lieu</th>
      <th>Adresse</th>
      <th>Ville</th>
      <th>Prix</th>           
			</tr>
   	 	<tr>
				<td><?php echo $concert->getTitreC();?></td>
   	 		<td><?php echo $concert->getDateC();?></td>
   	 		<td><?php echo $concert->getHeureC();?></td>
				<td><?php echo $concert->getMinuteC();?></td>
				<td><?php echo $concert->getLieuC();?></td>
				<td><?php echo $concert->getAdresseC();?></td>
				<td><?php echo $concert->getVilleC();?></td>
				<td><?php echo $concert->getPrixC();?>€</td>
			</tr>
   	</table>

  <h2>Pour modifier les informations du concert:</h2>
  <hr />
    <form method="post" action="./controlChangementConcert.php" >
      <fieldset>
            <input type="hidden" name="id" value="<?php echo $concert->getId()?>"/>
            <input type="hidden" name="titreC" value="<?php echo $concert->getTitreC()?>"/> <br />
          <label>Date :</label><input type="date" name="dateC" value="<?php echo $concert->getDateC()?>"/><br />
          <label>Heure :</label><input type="number"  name="heureC" value="<?php echo $concert->getHeureC()?>"/><br />
          <label>Minute :</label><input type="number"  name="minuteC" value="<?php echo $concert->getMinuteC()?>"/><br />
          <label>Lieu </label><input type="text" name="lieuC" value="<?php echo $concert->getLieuC()?>"/><br />
          <label>Adresse :</label><input type="text" name="adresseC" value="<?php echo $concert->getAdresseC()?>" /><br />
          <label>Ville :</label><input type="text" name="villeC" value="<?php echo $concert->getVilleC()?>"/><br />
          <label>Prix :</label><input type="int" name="prixC" value="<?php echo $concert->getPrixC()?>"/><br /><br /> 
            <input type="submit" value="Modifier" />
          </fieldset>
    </form>

    <br />

<a href="../Controleur/controlAddConcert.php">Retour vers la page de gestion des concerts</a>
