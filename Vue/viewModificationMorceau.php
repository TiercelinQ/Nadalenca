<p>Nom :</p>

<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$idR'");
	$tuple = mysql_fetch_array($res);
	echo $tuple['nom'];
	$idA = $tuple['idA'];
	$idT = $tuple['idT'];
	$resaudio = mysql_query("SELECT * FROM audio WHERE ida = '$idA'") or die ("Erreur insertion, viewModificationMorceau, resaudio");
	$tupleaudio = mysql_fetch_array($resaudio);
	$restexte = mysql_query("SELECT * FROM texte WHERE idt = '$idT'") or die ("Erreur insertion / view ModificationMorceau, restexte");
	$tupletexte = mysql_fetch_array($restexte);
	
	echo "<table>
			<thead>
				<tr>
					<th>Nom du fichier</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
			</thead>
			<tbody>";
					
	
	switch($tupleaudio['nbfichier'])
	{
		case 1:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idA=".$tupleaudio['ida']."&nb=2 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 2:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idA=".$tupleaudio['ida']."&nb=3 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 3:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idA=".$tupleaudio['ida']."&nb=4 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";			break;
		case 4:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idA=".$tupleaudio['ida']."&nb=5 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";			break;
		case 5:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich5']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=5 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?idA=".$tupleaudio['ida']."&nb=5 > Supprimer </a></td>
				</tr>";
			break;
	}
	switch($tupletexte['nbfichier'])
	{
		case 1:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idt=".$tupletexte['idt']."&nb=2 > Ajouter un fichier texte </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 2:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupletexte['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idt=".$tupletexte['idt']."&nb=3 > Ajouter un fichier texte </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 3:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupletexte['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=3 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idt=".$tupletexte['idt']."&nb=4 > Ajouter un fichier texte </a></td>
					<td></td>
					<td></td>
				</tr>";			
			break;
		case 4:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupletexte['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjout.php?idt=".$tupletexte['idt']."&nb=5 > Ajouter un fichier texte </a></td>
					<td></td>
					<td></td>
				</tr>";			
			break;
		case 5:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupletexte['nomfich5']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=5 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauTexte.php?idt=".$tupletexte['idt']."&nb=5 > Supprimer </a></td>
				</tr>";
			break;
	}
	echo "</tbody>
	</table>";