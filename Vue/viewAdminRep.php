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
					<th>Nom de l'audio </th>
					<th>Nom du texte </th>
					<th>alto </th>
					<th>basse </th>
					<th>soprano </th>
					<th>tenor </th>
					<th>Modifier </th>
					<th>Supprimer </th>
				</tr>
			</thead>
			
			<tbody> ";

while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td>" .$tuple['nomR']."</td>
				<td>".$tuple['audioR']. "</td>
				<td>". $tuple['texteR']." </td>
				<td>". $tuple['altoR']." </td>
				<td>". $tuple['basseR']." </td>
				<td>". $tuple['sopranoR']." </td>
				<td>". $tuple['tenorR']." </td>
				<td>"; echo "<a href="."../Controleur/controlModRep.php?id=".$tuple['idR']."> Modifier</a></td>
				<td>"; echo "<a href="."../Controleur/controlSupRep.php?id=".$tuple['idR']."> Supprimer</a></td>
			<tr>";

	}
	echo "</tbody>
	</table>";
?>
	<a href="../Controleur/controlAjoutReper.php">Ajouter un morceau au répertoire</a>