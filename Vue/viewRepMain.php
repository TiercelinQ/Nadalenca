<h1>Recherche d'un répertoire</h1>
<hr />

	<form method="post" action="./controlRepertoire.php">
		<fieldset>
			<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br />
			<input type="submit" value="Ok" /><br />
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
				</tr>
			</thead>
			
			<tbody> ";

while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td>"; echo "<a href="."../Controleur/controlRepvue.php?nomR=".$tuple['nomR']. ">".$tuple['nomR']."</a></td>
				<td>".$tuple['audioR']. "</td>
				<td>". $tuple['texteR']." </td>
				<td>". $tuple['altoR']." </td>
				<td>". $tuple['basseR']." </td>
				<td>". $tuple['sopranoR']." </td>
				<td>". $tuple['tenorR']." </td>
			<tr>";

	}
	echo "</tbody>
	</table>";

?>