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
			<p>Le fichier était destiné à ".$tupletexte['dest1'].", il l'est maintenant à ?
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
			<p>Le fichier était destiné à ".$tupletexte['dest2'].", il l'est maintenant à ?
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
			<p>Le fichier était destiné à ".$tupletexte['dest3'].", il l'est maintenant à ?
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
			<p>Le fichier était destiné à ".$tupletexte['dest4'].", il l'est maintenant à ?
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
			<p>Le fichier était destiné à ".$tupletexte['dest5'].", il l'est maintenant à ?
			<input type=\"text\" name=\"textedest\" /></p>>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
}
?>