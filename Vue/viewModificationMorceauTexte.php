<h1>Modification d'un fichier texte</h1>
<hr />

<?php
$req = mysql_query("SELECT * FROM texte WHERE idt = '$id'") or die ("Erreur / viewModificationMorceauTexte.php / req");
$tupletexte = mysql_fetch_array($req);

switch($nb)
{
	case 1:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorTexte.php\" >
			<p>Remplacer le fichier ".$tupletexte['nomfich1']." par </p>
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<input type=\"file\" name=\"texte\"/>
			<p>Ce fichier était les  ".$tupletexte['dest1'].", c'est maintenant ? 
			<input type=\"text\" name=\"textedest\"  /></p>
			<input type=\"hidden\" name=\"nb\" value=\"$nb\"  />
			<input type=\"hidden\" name=\"id\" value=\"$id\"  />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 2:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorTexte.php\" >
			<p>Remplacer le fichier ".$tupletexte['nomfich2']." par </p> </br>
			<input type=\"file\" name=\"texte\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Ce fichier était les  ".$tupletexte['dest2'].", c'est maintenant ? 
			<input type=\"text\" name=\"textedest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 3:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorTexte.php\" >
			<p>Remplacer le fichier ".$tupletexte['nomfich3']." par </p> </br>
			<input type=\"file\" name=\"texte\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Ce fichier était les  ".$tupletexte['dest3'].", c'est maintenant ? 
			<input type=\"text\" name=\"textedest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 4:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorTexte.php\" >
			<p>Remplacer le fichier ".$tupletexte['nomfich4']." par </p> </br>
			<input type=\"file\" name=\"texte\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Ce fichier était les  ".$tupletexte['dest4'].", c'est maintenant ? 
			<input type=\"text\" name=\"textedest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 5:
			echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorTexte.php\" >
			<p>Remplacer le fichier ".$tupletexte['nomfich5']." par </p> </br>
			<input type=\"file\" name=\"texte\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Ce fichier était les  ".$tupletexte['dest5'].", c'est maintenant ? 
			<input type=\"text\" name=\"textedest\" /></p>>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
}
?>
</br>
<a href="../Controleur/controlRepAdmin.php">Retour</a>