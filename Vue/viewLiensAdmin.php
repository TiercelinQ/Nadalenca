<h1>Liens</h1>
<hr />
<table border = "1">
		<tr>
		<td>Description</td>
			<td>Supprimer</td>
			<?php
	while ($tuple = mysql_fetch_array($res))
	{ 	
		$i = $tuple['id'];
		echo "<tr><td><a href="; 
		echo $tuple['lien'] . ">" .  $tuple['description']. "</a></td>";
		echo "<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Lien'/>
        </button></td></tr>";
      

		/*bouton sans utilisation du javascript
		echo "<td><button type=". "\"button\" " . "onclick=\"location.href='./controlSupLiens.php?idL=" 
		. $tuple['id']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Lien'/>
        </button></td></tr>";*/
		
	}

	?>
	</table><br/>

<h2>Ajout d'un nouveau lien</h2>
<hr />

<form method="POST" action="./controlAddLiens.php">
	<fieldset>
			<label>Adresse : </label><input type="url" name="lien" value="http://" required><br />
			<label>Description : </label><input type="text" name="description" placeholder="Description" required><br />
			<input type="submit" value="Ajouter">	<br />
	</fieldset>
</form>

<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>