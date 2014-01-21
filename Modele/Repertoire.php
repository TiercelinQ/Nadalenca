<?php
//On inclue config, ça permet de se connecter à la base de données
include("./config.php");

class Repertoire
{
	private $idR;
	private $nomR;
	private $idA;
	private $idT;
	
	//Les fonctions :
	public function getId()
	{
		return $this->idR;
	}
	
	public function getNom()
	{
		return $this->nomR;
	}
	
	public function getIdA()
	{
		return $this->idA;
	}
	
	public function getIdT()
	{
		return $this->idT;
	}
	
	//Un constructeur
	public function __construct ($nomR, $idA, $idT) 
	{
		$this->idR = null;
		$this->nomR = $nomR;
		$this->idA = $idA;
		$this->idT = $idT;
	}
	
	//Ajout dans la pase de données d'un nouveau répertoire
	public static function createRep($nom)
	{
		$ida = mysql_query("SELECT * FROM audio WHERE nom = '$nom'") or die("Erreur insertion 1");
		$tupleaudio = mysql_fetch_array($ida);
		$idaudio = $tupleaudio['ida'];
		$idt = mysql_query("SELECT * FROM texte WHERE nom = '$nom'") or die("Erreur insertion 2");
		$tupletexte = mysql_fetch_array($idt);
		$idtexte = $tupletexte['idt'];
		$res = mysql_query("INSERT INTO repertoire(nom, idA, idT) VALUES('$nom', '$idaudio','$idtexte')") or die ("Erreur insertion 3");
	}
	
	//Ajout dans la base de données d'un nouveau fichier audio
	public static function createaudio($nom, $nb, $audioprec,$audiotmp, $dest)
	{
		$audio = md5($audioprec).".mp3";
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1) VALUES ('$nom','$nb','$audio','$dest')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . $audio;
		move_uploaded_file($audiotmp, $target_path);
	}
	
	//Ajout dans la base de données d'un nouveau texte
	public static function createtexte($nom, $nb, $texteprec,$textetmp, $dest)
	{
		$texte = md5($texteprec).".pdf";
		$req = "INSERT INTO texte (nom,nbfichier, nomfich1, dest1) VALUES ('$nom','$nb','$texte','$dest')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . $texte;
		move_uploaded_file($textetmp, $target_path);
	}
	
	/*
	Fonction changementaudionb, qui prends en parametre l'id du tuple de la base de données, le numéro du fichier qui doit être changé, le nom du fichier à
	envoyé sur le serveur, le nom temporaire du fichier, ainsi que le destinataire du fichier
	*/
	public static function changementaudionb($id, $nb, $audioprec,$audiotmp, $audiodest)
	{
		//Elle va chercher le tuple dans la base de données qui correspond à l'id passé en parametre
		$res = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / changementaudionb / res");
		$tuple = mysql_fetch_array($res);
		//Chemin d'accès du fichier audio sur le serveur
		$target_pathaudio = "../Audio/";
		//On crypte le nom du fichier pour éviter d'avoir des doublons sur le serveur
		$audio = md5($audioprec).".mp3";
		$retour = false;
		
		//On modifie les fichiers en fonction du numéro du fichier qui change.
		switch($nb)
		{
			case 1:
				$target_path = $target_pathaudio . basename($tuple['nomfich1']);//On donne le chemin d'accès de l'ancien fichier
				unlink($target_path);//On supprime le fichier via la fonction unlink()
				$target_path = $target_pathaudio . $audio;//On donne le nouveau chemin d'accès du fichier
				move_uploaded_file($audiotmp, $target_path);//On envoie le fichier sur le serveur avec move_uploaded_file()
				$req = mysql_query("UPDATE audio SET nomfich1='$audio', dest1='$audiodest' WHERE ida='$id'") or die ("Erreur / changementaudionb / req 1");
				//On met le base de données à jour
				//On met le retour à vrai
				$retour = true;
				break;
			case 2:
				$target_path = $target_pathaudio . basename($tuple['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich2 = '$audio', dest2 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathaudio . basename($tuple['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich3 = '$audio', dest3 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathaudio . basename($tuple['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich4 = '$audio', dest4 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathaudio . basename($tuple['nomfich5']);
				unlink($target_path);
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich5 = '$audio', dest5 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 5");
				$retour = true;
				break;
		}
		//On envoie retour, si c'est vrai, le changement à marché
		return $retour;
	}
	
	/*
	Fonction changementtextenb, qui prends en parametre l'id du tuple de la base de données, le numéro du fichier qui doit être changé, le nom du fichier à
	envoyé sur le serveur, le nom temporaire du fichier, ainsi que le destinataire du fichier
	*/
	public static function changementtextenb($id, $nb, $texteprec,$textetmp, $textedest)
	{
		//Elle va chercher le tuple dans la base de données qui correspond à l'id passé en parametre
		$res = mysql_query("SELECT * FROM texte WHERE idt = '$id'") or die ("Erreur / changementtextenb / res");
		$tuple = mysql_fetch_array($res);
		//Chemin d'accès du fichier texte sur le serveur
		$target_pathtexte = "../Texte/";
		//On crypte le nom du fichier pour éviter d'avoir des doublons sur le serveur
		$texte = md5($texteprec).".pdf";
		//On modifie les fichiers en fonction du numéro du fichier qui change.
		$retour = false;
		
		switch($nb)
		{
			case 1:
				$target_path = $target_pathtexte . basename($tuple['nomfich1']);//Chemin d'accès de l'ancien fichier
				unlink($target_path);//Suppression de l'ancien fichier
				$target_path = $target_pathtexte . $texte;//Nouveau chemin d'accès
				move_uploaded_file($textetmp, $target_path);//Envoie du fichier sur le serveur
				$req = mysql_query("UPDATE texte SET nomfich1='$texte', dest1='$textedest' WHERE idt='$id'") or die ("Erreur / changementtextenb / req 1");
				//Mise à jour de la base de données
				$retour = true; // retour mis à vrai
				break;
			case 2:
				$target_path = $target_pathtexte . basename($tuple['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich2 = '$texte', dest2 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathtexte . basename($tuple['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich3 = '$texte', dest3 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathtexte . basename($tuple['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich4 = '$texte', dest4 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathtexte . basename($tuple['nomfich5']);
				unlink($target_path);
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich5 = '$texte', dest5 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 5");
				$retour = true;
				break;
		}
		return $retour;//Retourne le retour, si c'est vrai, c'est que tout s'est bien passé
	}
	
	/*
	Fonction de suppression d'un fichier audio du serveur et de la base de donnée, elle reçoit en parametre  l'id du tuple de la base de donnée, ainsi que
	le numéro du fichier qui est supprimé
	*/
	public static function supprimeraudionb($id, $nb)
	{	
		//Requête qui va chercher le tuple dans la base de données qui correspond à l'id passé en parametre 
		$res = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / changementaudionb / res");
		$tuple = mysql_fetch_array($res);
		//Chemin d'accès du dossier audio sur le serveur
		$target_pathaudio = "../Audio/";
		$retour = false;
		//Choix avec numéro du fichier à supprimer
		switch($nb)
		{
			case 1:
				//Choix nombre de fichier dans le tuple
				switch($tuple['nbfichier'])
				{
					case 2:
						$target_path = $target_pathaudio . basename($tuple['nomfich1']);//Chemin d'accès du fichier à supprimer
						unlink($target_path);//Suppression du fichier
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$req = mysql_query("UPDATE audio SET nbfichier = '1', nomfich1='$fich1', dest1 ='$dest1', nomfich2='null', dest2='null' WHERE ida='$id'") or die ("Erreur /suppression nb/ 2");
						//Déplacement dans la base de données, pour éviter les cases vides
						$retour = true;//Retour passe à vrai comme tout se passe bien
						break;
					case 3:
						$target_path = $target_pathaudio . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$req = mysql_query("UPDATE audio SET  nbfichier = '2' ,nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='null', dest3='null' WHERE ida ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathaudio . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE audio SET nbfichier = '3', nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathaudio . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE audio SET nbfichier = '4', nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 2:
				switch($tuple['nbfichier'])
				{
					case 2:
						$target_path = $target_pathaudio . basename($tuple['nomfich2']);
						unlink($target_path);
						$req = mysql_query("UPDATE audio SET nbfichier = '1', nomfich2='null', dest2='null' WHERE ida='$id'") or die ("Erreur /suppression nb/ 2");
						$retour = true;
						break;
					case 3:
						$target_path = $target_pathaudio . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$req = mysql_query("UPDATE audio SET  nbfichier = '2' , nomfich2='$fich2', dest2='$dest2', nomfich3='null', dest3='null' WHERE ida ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathaudio . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE audio SET nbfichier = '3', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathaudio . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE audio SET nbfichier = '4' nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 3:
				switch($tuple['nbfichier'])
				{
					case 3:
						$target_path = $target_pathaudio . basename($tuple['nomfich3']);
						unlink($target_path);
						$req = mysql_query("UPDATE audio SET  nbfichier = '2' , nomfich3='null', dest3='null' WHERE ida ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathaudio . basename($tuple['nomfich3']);
						unlink($target_path);
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE audio SET nbfichier = '3', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathaudio . basename($tuple['nomfich3']);
						unlink($target_path);
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE audio SET nbfichier = '4', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 4:
				switch($tuple['nbfichier'])
				{
					case 4:
						$target_path = $target_pathaudio . basename($tuple['nomfich4']);
						unlink($target_path);
						$req = mysql_query("UPDATE audio SET nbfichier = '3', nomfich4='null', dest4='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathaudio . basename($tuple['nomfich4']);
						unlink($target_path);
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE audio SET nbfichier = '4', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 5:
				switch($tuple['nbfichier'])
				{
					case 5:
						$target_path = $target_pathaudio . basename($tuple['nomfich5']);
						unlink($target_path);
						$req = mysql_query("UPDATE audio SET nbfichier = '4', nomfich5='null', dest5='null' WHERE ida ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
		return $retour;// retourne le retour
		}
	}
	
	/*
	Fonction supprimertextenb qui supprime un fichier du serveur et de la base de données, elle prends en paramètre l'id du tuple et le numéro du fichier
	supprimer
	*/
	public static function supprimertextenb($id, $nb)
	{
		//Requête qui va chercher le tuple dans la base de données qui correspond à l'id passé en parametre 
		$res = mysql_query("SELECT * FROM texte WHERE idt = '$id'") or die ("Erreur / changementtextenb / res");
		$tuple = mysql_fetch_array($res);
		//Chemin d'accès des fichiers textes
		$target_pathtexte = "../Texte/";
		$retour = false;
		
		//Choix avec le numéro du fichier à supprimer
		switch($nb)
		{
			case 1:
				//Choix avec le nombre de fichier dans le tuple
				switch($tuple['nbfichier'])
				{
					case 2:
						$target_path = $target_pathtexte . basename($tuple['nomfich1']);//Chemin d'accès du fichier à supprimer
						unlink($target_path);//Suppression du fichier
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$req = mysql_query("UPDATE texte SET nbfichier = '1', nomfich1='$fich1', dest1 ='$dest1', nomfich2='null', dest2='null' WHERE idt='$id'") or die ("Erreur /suppression nb/ 2");
						//Mise à jour de la base de données avec le déplacement des valeurs pour éviter les cases vides
						$retour = true;
						break;
					case 3:
						$target_path = $target_pathtexte . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$req = mysql_query("UPDATE texte SET  nbfichier = '2' ,nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='null', dest3='null' WHERE idt ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathtexte . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE texte SET nbfichier = '3', nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathtexte . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE texte SET nbfichier = '4', nomfich1='$fich1', dest1='$dest1', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 2:
				switch($tuple['nbfichier'])
				{
					case 2:
						$target_path = $target_pathtexte . basename($tuple['nomfich2']);
						unlink($target_path);
						$req = mysql_query("UPDATE texte SET nbfichier = '1', nomfich2='null', dest2='null' WHERE idt='$id'") or die ("Erreur /suppression nb/ 2");
						$retour = true;
						break;
					case 3:
						$target_path = $target_pathtexte . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$req = mysql_query("UPDATE texte SET  nbfichier = '2' , nomfich2='$fich2', dest2='$dest2', nomfich3='null', dest3='null' WHERE idt ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathtexte . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE texte SET nbfichier = '3', nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathtexte . basename($tuple['nomfich2']);
						unlink($target_path);
						$fich2 = $tuple['nomfich3'];
						$dest2 = $tuple['dest3'];
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE texte SET nbfichier = '4' nomfich2='$fich2', dest2='$dest2', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 3:
				switch($tuple['nbfichier'])
				{
					case 3:
						$target_path = $target_pathtexte . basename($tuple['nomfich3']);
						unlink($target_path);
						$req = mysql_query("UPDATE texte SET  nbfichier = '2' , nomfich3='null', dest3='null' WHERE idt ='$id'") or die("Erreur");
						$retour = true;
						break;
					case 4:
						$target_path = $target_pathtexte . basename($tuple['nomfich3']);
						unlink($target_path);
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$req = mysql_query("UPDATE texte SET nbfichier = '3', nomfich3='$fich3', dest3='$dest3', nomfich4='null', dest4='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathtexte . basename($tuple['nomfich3']);
						unlink($target_path);
						$fich3 = $tuple['nomfich4'];
						$dest3 = $tuple['dest4'];
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE texte SET nbfichier = '4', nomfich3='$fich3', dest3='$dest3', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 4:
				switch($tuple['nbfichier'])
				{
					case 4:
						$target_path = $target_pathtexte . basename($tuple['nomfich4']);
						unlink($target_path);
						$req = mysql_query("UPDATE texte SET nbfichier = '3', nomfich4='null', dest4='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
					case 5:
						$target_path = $target_pathtexte . basename($tuple['nomfich4']);
						unlink($target_path);
						$fich4 = $tuple['nomfich5'];
						$dest4 = $tuple['dest5'];
						$req = mysql_query("UPDATE texte SET nbfichier = '4', nomfich4='$fich4', dest4='$dest4', nomfich5='null', dest5='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
			case 5:
				switch($tuple['nbfichier'])
				{
					case 5:
						$target_path = $target_pathtexte . basename($tuple['nomfich5']);
						unlink($target_path);
						$req = mysql_query("UPDATE texte SET nbfichier = '4', nomfich5='null', dest5='null' WHERE idt ='$id'") or die("Erreur / suppressionaudinb");
						$retour = true;
						break;
				}
				break;
		}
	//Retourne le retour, si c'est vrai, tout s'est bien passé
	return $retour;	
	}
	
	/*
	Fonction suppressionMorceau, elle supprime les tuples de la base de données ainsi que tous les fichiers correspondant à ce morceau, elle prend
	en parametre l'id du morceau
	*/
	public static function suppressionMorceau($id)
	{
		//Requête pour chercher le morceau dans la table repertoire
		$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$id'")  or die("Erreur /suppressionMorceau / res");
		$tuple = mysql_fetch_array($res);
		//On récupère les identifiants des tuple audio et texte
		$ida = $tuple['idA'];
		$idt = $tuple['idT'];
		//On supprime le tuple dans la table répertoire
		$delete = mysql_query("DELETE FROM repertoire WHERE idr='$id'") or die("Erreur / suppression / Final");
		//On crée les tuples audio et texte
		$reqaudio = mysql_query("SELECT * FROM audio WHERE ida = '$ida'") or die ("Erreur / suppressionMorceau / reqaudio");
		$tupleaudio = mysql_fetch_array($reqaudio);
		$reqtexte = mysql_query("SELECT * FROM texte WHERE idt = '$idt'") or die ("Erreur / suppressionMorceau / reqtexte");
		$tupletexte = mysql_fetch_array($reqtexte);
		$retour = false;
		
		//On crée les chemins d'accès audio et texte
		$target_pathaudio = "../Audio/";
		$target_pathtexte = "../Texte/";
		
		//En fonction du nombre de fichier audio
		switch($tupleaudio['nbfichier'])
		{
			case 1:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);//Chemin d'accès du fichier à supprimer
				unlink($target_path);//Suppression du fichier
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 1a");//Suppression du tuple
				//retour mis à vrai si tout marche bien
				$retour = true;
				break;
			case 2:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich2']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich3']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich4']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich5']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 5");
				$retour = true;
				break;
		}
		//En fonction du nombre de fichier texte
		switch($tupletexte['nbfichier'])
		{
			case 1:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);//Chemin d'accès du fichier à supprimer
				unlink($target_path);//Suppression du fichier
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 1");//Suppresion du tuple dans la base de données
				// retour qui est mis à vrai si tout à bien fonctionner
				$retour = $retour && true;
				break;
			case 2:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 2");
				$retour = $retour && true;
				break;
			case 3:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich3']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 3");
				$retour = $retour && true;
				break;
			case 4:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich4']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 4");
				$retour = $retour && true;
				break;
			case 5:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich5']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 5");
				$retour = $retour && true;
				break;
		}
		//Rtourne retour si tout s'est bien passé
		return $retour;
	}
	
	/*
	Fonction qui ajoute un fichier audio un morceau, elle prends en parametre l'id du tuple audion le numéro du fichier ajouté, le nom du fichier, le nom temporaire
	ainsi que le destinataire du fichier
	*/
	public static function ajoutFichierAudio($id, $nb, $audioprec,$audiotmp, $dest)
	{
		//Chemin d'accès audio
		$target_pathaudio = "../Audio/";
		//Retour mis à faux
		$retour = false;
		//Utilisation du md5 pour éviter les doublon sur le serveur
		$audio = md5($audioprec).".mp3";
		
		//En fonction du numéro du fichier 
		switch($nb)
		{
			case 2:
				$target_path = $target_pathaudio . $audio;//Chemin d'acces du fichier à envoyé sur le serveur
				move_uploaded_file($audiotmp, $target_path);//Envoie du fichier sur le serveur
				$res = mysql_query("UPDATE audio SET nbfichier='$nb', nomfich2='$audio', dest2 ='$dest' WHERE ida ='$id'") or die ("Erreur / Fonction ajoutFichierAudio / 2");
				//Mise à jour de la table audio avec une nouvelle valeur ajouté
				$retour = true;//retour mis à vrai, si tout se passe bien
				break;
			case 3:
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$res = mysql_query("UPDATE audio SET nbfichier='$nb', nomfich3='$audio', dest3 ='$dest' WHERE ida ='$id'") or die ("Erreur / Fonction ajoutFichierAudio / 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$res = mysql_query("UPDATE audio SET nbfichier='$nb', nomfich4='$audio', dest4 ='$dest' WHERE ida ='$id'") or die ("Erreur / Fonction ajoutFichierAudio / 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathaudio . $audio;
				move_uploaded_file($audiotmp, $target_path);
				$res = mysql_query("UPDATE audio SET nbfichier='$nb', nomfich5='$audio', dest5 ='$dest' WHERE ida ='$id'") or die ("Erreur / Fonction ajoutFichierAudio / 5");
				$retour = true;
				break;
		}
		return $retour;//Retourne retour, vrai si tout va bien
	}
	
	/*
	Fonction ajoutFichierTexte, ajoute un fichier texte, elle prends en parametre l'identifiant du tuple dans le table texte, le numéro du fichier ajouté, 
	le nom du fichier, son nom temporaire et le type de fichier
	*/
	public static function ajoutFichierTexte($id, $nb, $texteprec,$textetmp , $dest)
	{
		//Chemin d'accès de texte
		$target_pathtexte = "../Texte/";
		//Retour initialisé à faux
		$retour = false;
		//nom du fichier texte passé au md5 pour éviter les doublon
		$texte = md5($texteprec).".pdf";
		
		//En fonction du numéro du fichier ajouté
		switch($nb)
		{
			case 2:
				$target_path = $target_pathtexte . $texte;//Chemin d'accès du nouveau fichier
				move_uploaded_file($textetmp, $target_path);//Envoie du fichier au serveur
				$res = mysql_query("UPDATE texte SET nbfichier='$nb', nomfich2='$texte', dest2 ='$dest' WHERE idt ='$id'") or die ("Erreur / Fonction ajoutFichiertexte / 2");
				//Mise à jour de la base de données avec les valeurs ajoutés
				$retour = true;
				//retour passe à vrai si tout s'est bien passé
				break;
			case 3:
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$res = mysql_query("UPDATE texte SET nbfichier='$nb', nomfich3='$texte', dest3 ='$dest' WHERE idt ='$id'") or die ("Erreur / Fonction ajoutFichiertexte / 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$res = mysql_query("UPDATE texte SET nbfichier='$nb', nomfich4='$texte', dest4 ='$dest' WHERE idt ='$id'") or die ("Erreur / Fonction ajoutFichiertexte / 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathtexte . $texte;
				move_uploaded_file($textetmp, $target_path);
				$res = mysql_query("UPDATE texte SET nbfichier='$nb', nomfich5='$texte', dest5 ='$dest' WHERE idt ='$id'") or die ("Erreur / Fonction ajoutFichiertexte / 5");
				$retour = true;
				break;
		}
		return $retour;//Retourne retoure, vrai si tout s'est bien passé.
	}
	
}
?>	