<h1>Modfication d'une piste audio</h1>
<hr />


<?php
//Requête pour aller chercher la listes des fichiers
$req = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / viewModificationMorceauAudio.php / req");
$tupleaudio = mysql_fetch_array($req);

//Input de fichier differents en fonction du numéro du fichier qui est changé
switch($nb)
{
	case 1:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorAudio.php\" >
			<p>Remplacer le fichier ".$tupleaudio['nomfich1']." par </p>
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<input type=\"file\" name=\"audio\"/>
			<p>Le fichier était destiné à ".$tupleaudio['dest1'].", il l'est maintenant à ?
			<input type=\"text\" name=\"audiodest\"  /></p>
			<input type=\"hidden\" name=\"nb\" value=\"$nb\"  />
			<input type=\"hidden\" name=\"id\" value=\"$id\"  />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 2:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorAudio.php\" >
			<p>Remplacer le fichier ".$tupleaudio['nomfich2']." par </p> </br>
			<input type=\"file\" name=\"audio\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Le fichier était destiné à ".$tupleaudio['dest2'].", il l'est maintenant à ?
			<input type=\"text\" name=\"audiodest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 3:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorAudio.php\" >
			<p>Remplacer le fichier ".$tupleaudio['nomfich3']." par </p> </br>
			<input type=\"file\" name=\"audio\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Le fichier était destiné à ".$tupleaudio['dest3'].", il l'est maintenant à ?
			<input type=\"text\" name=\"audiodest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 4:
		echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorAudio.php\" >
			<p>Remplacer le fichier ".$tupleaudio['nomfich4']." par </p> </br>
			<input type=\"file\" name=\"audio\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Le fichier était destiné à ".$tupleaudio['dest4'].", il l'est maintenant à ?
			<input type=\"text\" name=\"audiodest\" /></p>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
	case 5:
			echo " <form enctype=\"multipart/form-data\" method=\"post\" action=\"../Controleur/controlModificationMorAudio.php\" >
			<p>Remplacer le fichier ".$tupleaudio['nomfich5']." par </p> </br>
			<input type=\"file\" name=\"audio\" />
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\" />
			<p>Le fichier était destiné à ".$tupleaudio['dest5'].", il l'est maintenant à ?
			<input type=\"text\" name=\"audiodest\" /></p>>
			<input type=\"hidden\" name=\"nb\" value=".$nb." />
			<input type=\"hidden\" name=\"id\" value=".$id." />
			<input type=\"submit\" value=\"Modifier\" /> </form>";
		break;
}
?>
</br><a href="../Controleur/controlRepAdmin.php">Retour</a>