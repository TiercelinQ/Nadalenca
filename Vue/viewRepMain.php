	<form method="post" action="./controlRepertoire.php">
		<fieldset>
		<label>Recherche :</label>
		<input type="text" placeholder="Ex : Nadalet" name="recherche">
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
					<th>Voix1 </th>
					<th>Voix2 </th>
					<th>Voix3 </th>
					<th>Voix4 </th>
				</tr>
			</thead>
			
			<tbody> ";

while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td>"; echo "<a href="."../Controleur/controlRepvue.php?nomR=".$tuple['nomR']. ">".$tuple['nomR']."</a></td>
				<td>".$tuple['audioR']. "</td>
				<td>". $tuple['texteR']." </td>
				<td>". $tuple['voix1R']." </td>
				<td>". $tuple['voix2R']." </td>
				<td>". $tuple['voix3R']." </td>
				<td>". $tuple['voix4R']." </td>
			<tr>";

	}
	echo "</tbody>
	</table>";

?>