<h1>Recherche d'un répertoire</h1>
<hr />

	<form method="post" action="./controlRepertoireRecherche.php">
		<fieldset>
			<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br /><! Fonction de recherche dans le répertoire>
				<input type="submit" value="Ok" /><br />
		</fieldset>
	</form>
<?php
//Affichages des morceaux disponibles dans le repertoire
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );

echo "<h3>Liste des morceaux</h3>
			<ul> ";
//Affichage sous forme de liste
while ($tuple = mysql_fetch_array($res))
	{
	echo " <li>"; 
	echo "<a href="."../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']. ">".$tuple['nom']."</a></li>";
	}
	echo "</ul>";

?>