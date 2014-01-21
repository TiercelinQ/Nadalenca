<h1>Résultat de votre recherche</h1>	
<hr />

<p>Il y a <?php echo $nb_resultats; // on affiche le nombre de résultats 
if($nb_resultats > 1) { echo ' morceaux'; } else { echo ' morceau'; } // on vérifie le nombre de résultats pour orthographier correctement. 
	?>
		correspondant a votre critère :<br/>
		<br/><table border ='1'>
			<caption>Liste des morceaux :</caption>
			
			<thead>
				<tr>
					<th>Nom </th>
					<th>Modifier </th>
					<th>Supprimer </th>
				</tr>
			</thead>
			
			<tbody>
<?php	//On affiche les resultats possibles avec les possibilités de modification et suppression
			while ($tuple = mysql_fetch_array($res))
			{
			
			echo " <tr> 
					<td><a href=\"../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']." \" target=\"_blank\" >".$tuple['nom']."</a></td>
					<td><a href=\"../Controleur/controlModifierRepertoire.php?idr=".$tuple['idr']."\" > Modifier</a></td>
					<td><a href=\"../Controleur/controlSupRep.php?id=".$tuple['idr']."\" > Supprimer</a></td>
				</tr>";
			
			}
			
?>		</tbody>
		</table>	

		<a href="../Controleur/controlRepAdmin.php">Faire une nouvelle recherche </a></br>
	
