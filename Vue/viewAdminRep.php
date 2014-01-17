<h1>Gestion des répertoires</h1>
<hr />

<form method="post" action="./controlAdminRep.php">
	<fieldset>
		<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br />
		<input type="submit" value="Ok" />
		</fieldset>
	</form>
<?php
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );

	echo "<table>
			<caption>Liste des morceaux :</caption>
			
			<thead>
				<tr>
					<th>Nom </th>
					<th>Modifier </th>
					<th>Supprimer </th>
				</tr>
			</thead>
			
			<tbody> ";

while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td>" .$tuple['nom']."</td>
				<td>"; echo "<a href="."../Controleur/controlModifierRepertoire.php?idr=".$tuple['idr']."> Modifier</a></td>
				<td>"; echo "<a href="."../Controleur/controlSupRep.php?id=".$tuple['idr']."> Supprimer</a></td>
			<tr>";

	}
	echo "<tr>
				<td> <a href=\"../Controleur/controlAjoutReper.php\">Ajouter un morceau au répertoire</a></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>";
?>
	<br /><br />
	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>