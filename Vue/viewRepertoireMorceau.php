<h1>Morceau</h1>
<hr />
	<?php
	//Requête pour aller chercher les id audio et textes
	$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$id'") or die ("Erreur insertion, viewRepertoireMorceau, res");
	$tuple = mysql_fetch_array($res);
	?>
	<p> Nom du morceau : <?php echo $tuple['nom']; ?> </p>
	<p> Pistes audio : </p>
	<?php 
	//Requête pour aller chercher la liste des pistes audio
	$idA = $tuple['idA'];
	$resaudio = mysql_query("SELECT * FROM audio WHERE ida = '$idA'") or die ("Erreur insertion, viewRepertoireMorceau, resaudio");
	$tupleaudio = mysql_fetch_array($resaudio);
	$i = $tupleaudio['nbfichier'];
	//Affichage des pistes audios en fonction du nombre de pistes
	switch($i)
	{
		case 0:
			echo "Il n'y a pas de piste audio";
			break;
		case 1:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1']."</br>";
			break;
		case 2:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2']."</br>";
			break;
		case 3:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3']."</br>";
			break;
		case 4:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich4']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest4']."</br>";
			break;
		case 5:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich4']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest4']."</br>";
			echo "<audio src="."../Audio/".$tupleaudio['nomfich5']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest5']."</br>";
			break;
	}
	?>
	<p> Fichiers textes (au format PDF) :</p>
	<?php
	//Requête pour aller chercher la liste des fichiers textes
	$idT = $tuple['idT'];
	$restexte = mysql_query("SELECT * FROM texte WHERE idt = '$idT'") or die ("Erreur insertion, viewRepertoireMorceau, restexte");
	$tupletexte = mysql_fetch_array($restexte);
	$i = $tupletexte['nbfichier'];
	$blank = "_blank";
	//affichage des fichiers textes en fonction du nombre de fichier
	switch($i)
	{
		case 0:
			echo "Il n'y a pas de fichier texte";
			break;
		case 1:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"." >"; echo $tupletexte['dest1']." </a></br>";
			break;
		case 2:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']. "</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a></br>";
			break;
		case 3:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a></br>";
			break;
		case 4:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich4']." target="."$blank"."  >"; echo $tupletexte['dest4']."</a></br>";
			break;
		case 5:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich4']." target="."$blank"."  >"; echo $tupletexte['dest4']."</a></br>";
			echo "<a href="."../Texte/".$tupletexte['nomfich5']." target="."$blank"."  >"; echo $tupletexte['dest5']."</a></br>";
			break;
	}
	?>
	</br>

	<a href="../Controleur/controlRepertoire.php">Retour</a>