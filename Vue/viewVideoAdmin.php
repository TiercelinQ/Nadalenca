<script>
function verif(i)
{

var x;
var r=confirm("Confirmez vous la suppression de la vidéo?");
if (r==true)
  {
  location.href = './controlSupVideos.php?idV=' + i;
  }
 
}
</script>


<h1>Vidéos</h1>
<hr />
<table border = "1">
		<tr>
		<td>Titre</td>
		<td>Supprimer</td>
			<?php
	while ($tuple = mysql_fetch_array($res))
	{ 	
		$i = $tuple['idV'];
		echo "<tr><td>" . $tuple['titreV'] . "</td>";
		echo "<td><button type=" . " \"button\" " . "onclick= \"verif($i)\" " . "><img src='../Images/remove.png'  alt='Image Suppression Video'/>
        </button></td></tr>";
      

		/*bouton sans utilisation du javascript
		echo "<td><button type=". "\"button\" " . "onclick=\"location.href='./controlSupLiens.php?idL=" 
		. $tuple['id']. "'\"><img src='../Images/remove.png'  alt='Image Suppression Lien'/>
        </button></td></tr>";*/
		
	}

	?>
	</table><br/>

<h2>Ajout d'une nouvelle vidéo</h2>
<hr />

<form method="POST" action="./controlAddVideos.php">
	<fieldset>
			<label>Titre : </label><input type="text" name="titreV" required><br />
			<label>Lien : </label><input type="text" name="lienV" required><br />
			<label>Description : </label><input type="text" name="descriptionV" placeholder="Description" required><br />
			<input type="submit" value="Ajouter">	<br />
	</fieldset>
</form>

<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>