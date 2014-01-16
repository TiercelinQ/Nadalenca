<h1>Morceau</h1>
<hr />
	<?php
	$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$id'") or die ("Erreur insertion, viewRepertoireMorceau, res");
	$tuple = mysql_fetch_array($res);
	?>
	<p> Nom du morceau : <?php echo $tuple['nom']; ?> </p>
	<p> Pistes audios : </p>
	<?php 
	$idA = $tuple['idA'];
	$resaudio = mysql_query("SELECT * FROM audio WHERE ida = '$idA'") or die ("Erreur insertion, viewRepertoireMorceau, resaudio");
	$tupleaudio = mysql_fetch_array($resaudio);
	$i = $tupleaudio['nbfichier'];
	switch($i)
	{
		case 1:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1'];
			break;
		case 2:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2'];
			break;
		case 3:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3'];
			break;
		case 4:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich4']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest4'];
			break;
		case 5:
			echo "<audio src="."../Audio/".$tupleaudio['nomfich1']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest1'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich2']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest2'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich3']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest3'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich4']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest4'];
			echo "<audio src="."../Audio/".$tupleaudio['nomfich5']." controls >Veuillez mettre à jour votre navigateur !</audio>";
			echo " pour  ".$tupleaudio['dest5'];
			break;
	}
	?>
	<p> Fichiers textes (au format PDF) :</p>
	<?php
	$idT = $tuple['idT'];
	$restexte = mysql_query("SELECT * FROM texte WHERE idt = '$idT'") or die ("Erreur insertion, viewRepertoireMorceau, restexte");
	$tupletexte = mysql_fetch_array($restexte);
	$i = $tupletexte['nbfich'];
	$blank = "_blank";
	switch($i)
	{
		case 1:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"." >"; echo $tupletexte['dest1']." </a>";
			break;
		case 2:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']. "</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a>";
			break;
		case 3:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a>";
			break;
		case 4:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich4']." target="."$blank"."  >"; echo $tupletexte['dest4']."</a>";
			break;
		case 5:
			echo "<a href="."../Texte/".$tupletexte['nomfich1']." target="."$blank"."  >"; echo $tupletexte['dest1']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich2']." target="."$blank"."  >"; echo $tupletexte['dest2']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich3']." target="."$blank"."  >"; echo $tupletexte['dest3']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich4']." target="."$blank"."  >"; echo $tupletexte['dest4']."</a>";
			echo "<a href="."../Texte/".$tupletexte['nomfich5']." target="."$blank"."  >"; echo $tupletexte['dest5']."</a>";
			break;
	}
	?>
	<br /><br />

	<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>