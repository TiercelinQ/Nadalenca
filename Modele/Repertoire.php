<?php

include("./config.php");

class Repertoire
{
	private $idR;
	private $nomR;
	private $audioR;
	private $texteR;
	private $voix1R;
	private $voix2R;
	private $voix3R;
	private $voix4R;
	
	//Les fonctions :
	public function getId()
	{
		return $this->idR;
	}
	
	public function getNom()
	{
		return $this->nomR;
	}
	
	public function getAudio()
	{
		return $this->audioR;
	}
	
	public function getTexte()
	{
		return $this->texteR;
	}
	
	public function getVoix1()
	{
		return $this->voix1R;
	}
	
	public function getVoix2()
	{
		return $this->voix2R;
	}
	
	public function getVoix3()
	{
		return $this->voix3R;
	}
	
	public function getVoix4()
	{
		return $this->voix4R;
	}
	
	//Un constructeur
	public function __construct ($nomR, $audioR, $texteR, $voix1R, $voix2R, $voix3R, $voix4R) 
	{
		$this->idR = null;
		$this->nomR = $nomR;
		$this->audioR = $audioR;
		$this->texteR = $texteR;
		$this->voix1R = $voix1R;
		$this->voix2R = $voix2R;
		$this->voix3R = $voix3R;
		$this->voix4R = $voix4R;	
	}
	
	//création d'un nouveau morceau dans la base de données repertoire
	public static function create($nom, $audio, $texte, $voix1, $voix2, $voix3, $voix4)
	{
		
		$nomR = $nom;
		$audioR = $audio;
		$texteR = $texte;
		$voix1R = $voix1;
		$voix2R = $voix2;
		$voix3R = $voix3;
		$voix4R = $voix4;

		$req = "INSERT INTO repertoire (nomR,audioR, texteR, voix1R, voix2R, voix3R, voix4R) VALUES ('$nomR','$audioR','$texteR','$voix1R','$voix2R','$voix3R','$voix4R')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
	}
	
	public static function moveFile($audio, $audiotmp, $texte, $textetmp, $voix1, $voix1tmp, $voix2, $voix2tmp, $voix3, $voix3tmp, $voix4, $voix4tmp)
	{
		$target_pathaudio = "../Audio/";
		$target_pathaudio = $target_pathaudio . basename( $audio);
		move_uploaded_file($audiotmp, $target_pathaudio);
		$target_pathtexte = "../Texte/";
		$target_pathtexte = $target_pathtexte . basename( $texte);
		move_uploaded_file($textetmp, $target_pathtexte);
		$target_pathvoix1 = "../Voix/Voix1/";
		$target_pathvoix1 = $target_pathvoix1 . basename( $voix1);
		move_uploaded_file($voix1tmp, $target_pathvoix1);
		$target_pathvoix2 = "../Voix/Voix2/";
		$target_pathvoix2 = $target_pathvoix2 . basename( $voix2);
		move_uploaded_file($voix2tmp, $target_pathvoix2);
		$target_pathvoix3 = "../Voix/Voix3/";
		$target_pathvoix3 = $target_pathvoix3 . basename($voix3);
		move_uploaded_file($voix3tmp, $target_pathvoix3);
		$target_pathvoix4 = "../Voix/Voix4/";
		$target_pathvoix4 = $target_pathvoix4 . basename( $voix4);
		move_uploaded_file($voix4tmp, $target_pathvoix4);
	}
	
	public static function getRepById($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / classe repertoire / fonction getRepById");
		$tuple = mysql_fetch_array($res);
		return new Repertoire($id, $tuple['audioR'],$tuple['texteR'],$tuple['voix1R'],$tuple['voix2R'],$tuple['voix3R'],$tuple['voix4R']);
	}
	
	
	//suppression d'un morceau dans la base de donnée repertoire
	public static function delete($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idR = '$id'") or die ("Erreur insertion / Classe répertoire/Fonction delete");
		$tuple = mysql_fetch_array($res);
		$target_pathaudio = "../Audio/";
		$target_pathaudio = $target_pathaudio . $tuple['audioR'];
		unlink($target_pathaudio);
		$target_pathtexte = "../Texte/";
		$target_pathtexte = $target_pathtexte . $tuple['texteR'];
		unlink($target_pathtexte);
		$target_pathvoix1 = "../Voix/Voix1/";
		$target_pathvoix1 = $target_pathvoix1 . $tuple['voix1R'];
		unlink($target_pathvoix1);
		$target_pathvoix2 = "../Voix/Voix2/";
		$target_pathvoix2 = $target_pathvoix2 . $tuple['voix2R'];
		unlink($target_pathvoix2);
		$target_pathvoix3 = "../Voix/Voix3/";
		$target_pathvoix3 = $target_pathvoix3 . $tuple['voix3R'];
		unlink($target_pathvoix3);
		$target_pathvoix4 = "../Voix/Voix4/";
		$target_pathvoix4 = $target_pathvoix4 . $tuple['voix4R'];
		unlink($target_pathvoix4);
		
	}
	
	public static function deletebdd($id)
	{
		$req = mysql_query("DELETE FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / Classez Repertoire / Fonction delete");
		return true;
	}
	
	
	public static function changementRep($audio, $audiotmp, $texte, $textetmp, $voix1, $voix1tmp, $voix2, $voix2tmp, $voix3, $voix3tmp, $voix4, $voix4tmp)
	{
		if($audio != null)
		{
			$target_pathaudio = "../Audio/";
			$target_pathaudio = $target_pathaudio . basename( $audio);
			move_uploaded_file($audiotmp, $target_pathaudio);
		}
		if($texte != null)
		{
			$target_pathtexte = "../Texte/";
			$target_pathtexte = $target_pathtexte . basename( $texte);
			move_uploaded_file($textetmp, $target_pathtexte);
		}
		if($voix1 != null)
		{
			$target_pathvoix1 = "../Voix/Voix1/";
			$target_pathvoix1 = $target_pathvoix1 . basename( $voix1);
			move_uploaded_file($voix1tmp, $target_pathvoix1);
		}
		if($voix2 != null)
		{
			$target_pathvoix2 = "../Voix/Voix2/";
			$target_pathvoix2 = $target_pathvoix2 . basename( $voix2);
			move_uploaded_file($voix2tmp, $target_pathvoix2);
		}
		if($voix3 != null)
		{
			$target_pathvoix3 = "../Voix/Voix3/";
			$target_pathvoix3 = $target_pathvoix3 . basename($voix3);
			move_uploaded_file($voix3tmp, $target_pathvoix3);
		}
		if($voix4 != null)
		{
			$target_pathvoix4 = "../Voix/Voix4/";
			$target_pathvoix4 = $target_pathvoix4 . basename( $voix4);
			move_uploaded_file($voix4tmp, $target_pathvoix4);
		}	
		
	}
}
?>
	