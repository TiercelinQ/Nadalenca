<h1>Modification d'un morceau </h1>
<hr/>

<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$idR'");
	$tuple = mysql_fetch_array($res);
	echo "Nom : ".$tuple['nom'];
	$ida = $tuple['idA'];
	$idt = $tuple['idT'];
	$resaudio = mysql_query("SELECT * FROM audio WHERE ida = '$ida'") or die ("Erreur insertion, viewModificationMorceau, resaudio");
	$tupleaudio = mysql_fetch_array($resaudio);
	$restexte = mysql_query("SELECT * FROM texte WHERE idt = '$idt'") or die ("Erreur insertion / view ModificationMorceau, restexte");
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
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td>Ne peut pas être supprimé</td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjoutAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 2:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjoutAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";
			break;
		case 3:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Modifier</a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjoutAudio.php?ida=".$tupleaudio['ida']."&nb=4 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";			
			break;
		case 4:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";			
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjoutAudio.php?ida=".$tupleaudio['ida']."&nb=5 > Ajouter une piste audio </a></td>
					<td></td>
					<td></td>
				</tr>";			break;
		case 5:
			echo "<tr>
					<td>".$tupleaudio['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=1 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich2']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=2 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich3']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=3 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich4']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=4 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=4 > Supprimer </a></td>
				</tr>";
			echo "<tr>
					<td>".$tupleaudio['nomfich5']."</td>
					<td><a href="."../Controleur/controlModificationMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=5 > Modifier </a></td>
					<td><a href="."../Controleur/controlSuppressionMorceauAudio.php?ida=".$tupleaudio['ida']."&nb=5 > Supprimer </a></td>
				</tr>";
			break;
	}
	switch($tupletexte['nbfichier'])
	{
		case 1:
			echo "<tr>
					<td>".$tupletexte['nomfich1']."</td>
					<td><a href="."../Controleur/controlModificationMorceauTexte.php?idt=".$tupletexte['idt']."&nb=1 > Modifier </a></td>
					<td>Ne peut pas être supprimé</td>
				</tr>";
			echo "<tr>
					<td><a href="."../Controleur/controlModificationMorceauAjoutTexte.php?idt=".$tupletexte['idt']."&nb=2 > Ajouter un fichier texte </a></td>
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
					<td><a href="."../Controleur/controlModificationMorceauAjoutTexte.php?idt=".$tupletexte['idt']."&nb=3 > Ajouter un fichier texte </a></td>
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
					<td><a href="."../Controleur/controlModificationMorceauAjoutTexte.php?idt=".$tupletexte['idt']."&nb=4 > Ajouter un fichier texte </a></td>
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
					<td><a href="."../Controleur/controlModificationMorceauAjoutTexte.php?idt=".$tupletexte['idt']."&nb=5 > Ajouter un fichier texte </a></td>
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