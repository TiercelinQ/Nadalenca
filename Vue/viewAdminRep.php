<h1>Gestion du répertoires</h1>
<hr />

<form method="post" action="./controlAdminRep.php">
	<fieldset>
		<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br /><!-- Fonction de recherche dans le répertoire-->
		<input type="submit" value="Ok" />
		</fieldset>
	</form>
<?php
//Requête qui prend toute la table repertoire de la base de données 
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );
	//Debut de l'affichage
	echo "<table border ='1'>
			<caption>Liste des morceaux :</caption>
			
			<thead>
				<tr>
					<th>Nom </th>
					<th>Modifier </th>
					<th>Supprimer </th>
				</tr>
			</thead>
			
			<tbody> ";
//Affichage des noms ainsi que des fonctions possibles sur ces fichiers
while ($tuple = mysql_fetch_array($res))
	{
	echo " <tr> 
				<td><a href=\"../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']." \" target=\"_blank\" >".$tuple['nom']."</a></td>
				<td><a href=\"../Controleur/controlModifierRepertoire.php?idr=".$tuple['idr']."\" > Modifier</a></td>
				<td><a href=\"../Controleur/controlSupRep.php?id=".$tuple['idr']."\" > Supprimer</a></td>
			</tr>";

	}
	echo "<tr>
				<td> <a href=\"../Controleur/controlAjoutRep.php\">Ajouter un morceau au répertoire</a></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>";
?>
	<br /><br />
	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>