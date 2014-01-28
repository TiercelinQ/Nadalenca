<title><?php echo ($lien->getLienL());?></title>
      <h1><?php echo ($lien->getLienL());?></h1>
			<hr />
           
		<table border="1">
			<tr>
        <th>Lien</th>
        <th>Description</th>
			</tr>
   	 	<tr>
				<td><?php echo $lien->getDescriL();?></td>
   	 		<td><?php echo $lien->getLienL();?></td>
			</tr>
   	</table>

  <h2>Pour modifier les informations du lien:</h2>
  <hr />
    <form method="post" action="./controlChangementLien.php" >
      <fieldset>
            <input type="hidden" name="id" value="<?php echo $lien->getIdL()?>"/>
            <input type="hidden" name="lien" value="<?php echo $lien->getDescriL()?>"/><br />
          <label>Description :</label><input type="text"  name="description" value="<?php echo $lien->getLienL()?>"/><br />
            <input type="submit" value="Modifier" />
          </fieldset>
    </form>

    <br />

<a href="../Controleur/controlLiensAdmin.php">Retour vers la page de gestion des liens</a>
