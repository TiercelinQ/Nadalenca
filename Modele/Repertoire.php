<?php

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
	public static function createaudio($nom, $nb, $audio1, $audio1tmp, $taudio1)
	{
		$req = "INSERT INTO audio (nom,nbfichier, nomfich1, dest1) VALUES ('$nom','$nb','$audio1','$taudio1')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathaudio = "../Audio/";
		$target_path = $target_pathaudio . basename($audio1);
		move_uploaded_file($audio1tmp, $target_path);
	}
	
	//Ajout dans la base de données d'un nouveau texte
	public static function createtexte($nom, $nb, $texte1, $texte1tmp, $ttexte1)
	{
		$req = "INSERT INTO texte (nom,nbfichier, nomfich1, dest1) VALUES ('$nom','$nb','$texte1','$ttexte1')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
		$target_pathtexte = "../Texte/";
		$target_path = $target_pathtexte . basename($texte1);
		move_uploaded_file($texte1tmp, $target_path);
	}
	
	//
	public static function changementaudionb($id, $nb, $audio, $audiotmp, $audiodest)
	{
		$res = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / changementaudionb / res");
		$tuple = mysql_fetch_array($res);
		$target_pathaudio = "../Audio/";
		
		switch($nb)
		{
			case 1:
				$target_path = $target_pathaudio . basename($tuple['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich1='$audio', dest1='$audiodest' WHERE ida='$id'") or die ("Erreur / changementaudionb / req 1");
				$retour = true;
				break;
			case 2:
				$target_path = $target_pathaudio . basename($tuple['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich2 = '$audio', dest2 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathaudio . basename($tuple['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich3 = '$audio', dest3 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathaudio . basename($tuple['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich4 = '$audio', dest4 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathaudio . basename($tuple['nomfich5']);
				unlink($target_path);
				$target_path = $target_pathaudio . basename($audio);
				move_uploaded_file($audiotmp, $target_path);
				$req = mysql_query("UPDATE audio SET nomfich5 = '$audio', dest5 = '$audiodest' WHERE ida = '$id'") or die ("Erreur / changementaudionb / req 5");
				$retour = true;
				break;
		}
		return $retour;
	}
	
	public static function changementtextenb($id, $nb, $texte, $textetmp, $textedest)
	{
		$res = mysql_query("SELECT * FROM texte WHERE idt = '$id'") or die ("Erreur / changementtextenb / res");
		$tuple = mysql_fetch_array($res);
		$target_pathtexte = "../Texte/";
		
		switch($nb)
		{
			case 1:
				$target_path = $target_pathtexte . basename($tuple['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($texte);
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich1='$texte', dest1='$textedest' WHERE idt='$id'") or die ("Erreur / changementtextenb / req 1");
				$retour = true;
				break;
			case 2:
				$target_path = $target_pathtexte . basename($tuple['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($texte);
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich2 = '$texte', dest2 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 2");
				$retour = true;
				break;
			case 3:
				$target_path = $target_pathtexte . basename($tuple['nomfich3']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($texte);
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich3 = '$texte', dest3 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 3");
				$retour = true;
				break;
			case 4:
				$target_path = $target_pathtexte . basename($tuple['nomfich4']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($texte);
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich4 = '$texte', dest4 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 4");
				$retour = true;
				break;
			case 5:
				$target_path = $target_pathtexte . basename($tuple['nomfich5']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($texte);
				move_uploaded_file($textetmp, $target_path);
				$req = mysql_query("UPDATE texte SET nomfich5 = '$texte', dest5 = '$textedest' WHERE idt = '$id'") or die ("Erreur / changementtextenb / req 5");
				$retour = true;
				break;
		}
		return $retour;
	}
	
	public static function supprimeraudionb($id, $nb)
	{
		$res = mysql_query("SELECT * FROM audio WHERE ida = '$id'") or die ("Erreur / changementaudionb / res");
		$tuple = mysql_fetch_array($res);
		$target_pathaudio = "../Audio/";
		$retour = false;
		
		switch($nb)
		{
			case 1:
				switch($tuple['nbfichier'])
				{
					case 1:
						echo "Vous ne pouvez pas supprimer ce fichier, car c'est le seul";
						break;
					case 2:
						$target_path = $target_pathaudio . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$req = mysql_query("UPDATE audio SET nbfichier = '1', nomfich1='$fich1', dest1 ='$dest1', nomfich2='null', dest2='null' WHERE ida='$id'") or die ("Erreur /suppression nb/ 2");
						$retour = true;
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
		return $retour;
		}
	}
	
	
	public static function supprimertextenb($id, $nb)
	{
		$res = mysql_query("SELECT * FROM texte WHERE idt = '$id'") or die ("Erreur / changementtextenb / res");
		$tuple = mysql_fetch_array($res);
		$target_pathtexte = "../Texte/";
		$retour = false;
		
		switch($nb)
		{
			case 1:
				switch($tuple['nbfichier'])
				{
					case 1:
						echo "Vous ne pouvez pas supprimer ce fichier, car c'est le seul";
						break;
					case 2:
						$target_path = $target_pathtexte . basename($tuple['nomfich1']);
						unlink($target_path);
						$fich1 = $tuple['nomfich2'];
						$dest1 = $tuple['dest2'];
						$req = mysql_query("UPDATE texte SET nbfichier = '1', nomfich1='$fich1', dest1 ='$dest1', nomfich2='null', dest2='null' WHERE idt='$id'") or die ("Erreur /suppression nb/ 2");
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
	return $retour;	
	}
	
	public static function suppressionMorceau($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idr = '$id'")  or die("Erreur /suppressionMorceau / res");
		$tuple = mysql_fetch_array($res);
		$ida = $tuple['idA'];
		$idt = $tuple['idT'];
		$delete = mysql_query("DELETE FROM repertoire WHERE idr='$id'") or die("Erreur / suppression / Final");
		$reqaudio = mysql_query("SELECT * FROM audio WHERE ida = '$ida'") or die ("Erreur / suppressionMorceau / reqaudio");
		$tupleaudio = mysql_fetch_array($reqaudio);
		$reqtexte = mysql_query("SELECT * FROM texte WHERE idt = '$idt'") or die ("Erreur / suppressionMorceau / reqtexte");
		$tupletexte = mysql_fetch_array($reqtexte);
		$retour = false;
		
		$target_pathaudio = "../Audio/";
		$target_pathtexte = "../Texte/";
		
		switch($tupleaudio['nbfichier'])
		{
			case 1:
				$target_path = $target_pathaudio . basename($tupleaudio['nomfich1']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM audio WHERE ida = '$ida'") or die("Erreur / suppression / case 1a");
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
		switch($tupletexte['nbfichier'])
		{
			case 1:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 1");
				$retour = $retour & true;
				break;
			case 2:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 2");
				$retour = $retour & true;
				break;
			case 3:
				$target_path = $target_pathtexte . basename($tupletexte['nomfich1']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich2']);
				unlink($target_path);
				$target_path = $target_pathtexte . basename($tupletexte['nomfich3']);
				unlink($target_path);
				$reqdelete = mysql_query("DELETE FROM texte WHERE idt = '$idt'") or die("Erreur / suppression / case 3");
				$retour = $retour & true;
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
				$retour = $retour & true;
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
				$retour = $retour & true;
				break;
		}
		return $retour;
	}
	
}
?>	