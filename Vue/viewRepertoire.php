<h1>Recherche d'un répertoire</h1>
<hr />

	<form method="post" action="./controlRepertoireRecherche.php">
		<fieldset>
			<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br />
			<input type="submit" value="Ok" /><br />
		</fieldset>
	</form>
<?php
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );

echo "<h3>Liste des morceaux</h3>
		<table>	
			<tr>
				<th>Nom </th>
			</tr> ";

while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td>"; echo "<a href="."../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']. ">".$tuple['nom']."</a></td>
			<tr>";

	}
	echo "</table>";

?>