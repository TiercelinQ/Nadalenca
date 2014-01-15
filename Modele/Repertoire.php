<?php

include("./config.php");

class Repertoire
{
	private $idR;
	private $nomR;
	private $audioR;
	private $texteR;
	private $altoR;
	private $basseR;
	private $sopranoR;
	private $tenorR;
	
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
	
	public function getalto()
	{
		return $this->altoR;
	}
	
	public function getbasse()
	{
		return $this->basseR;
	}
	
	public function getsoprano()
	{
		return $this->sopranoR;
	}
	
	public function gettenor()
	{
		return $this->tenorR;
	}
	
	//Un constructeur
	public function __construct ($nomR, $audioR, $texteR, $altoR, $basseR, $sopranoR, $tenorR) 
	{
		$this->idR = null;
		$this->nomR = $nomR;
		$this->audioR = $audioR;
		$this->texteR = $texteR;
		$this->altoR = $altoR;
		$this->basseR = $basseR;
		$this->sopranoR = $sopranoR;
		$this->tenorR = $tenorR;	
	}
	
	//création d'un nouveau morceau dans la base de données repertoire
	public static function create($nom, $audio, $texte, $alto, $basse, $soprano, $tenor)
	{
		
		$nomR = $nom;
		$audioR = $audio;
		$texteR = $texte;
		$altoR = $alto;
		$basseR = $basse;
		$sopranoR = $soprano;
		$tenorR = $tenor;

		$req = "INSERT INTO repertoire (nomR,audioR, texteR, altoR, basseR, sopranoR, tenorR) VALUES ('$nomR','$audioR','$texteR','$altoR','$basseR','$sopranoR','$tenorR')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Repertoire / Fonction insertion repertoire");
	}
	
	public static function moveFile($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp)
	{
		$target_pathaudio = "../Audio/";
		$target_pathaudio = $target_pathaudio . basename( $audio);
		move_uploaded_file($audiotmp, $target_pathaudio);
		$target_pathtexte = "../Texte/";
		$target_pathtexte = $target_pathtexte . basename( $texte);
		move_uploaded_file($textetmp, $target_pathtexte);
		$target_pathalto = "../Voix/alto/";
		$target_pathalto = $target_pathalto . basename( $alto);
		move_uploaded_file($altotmp, $target_pathalto);
		$target_pathbasse = "../Voix/basse/";
		$target_pathbasse = $target_pathbasse . basename( $basse);
		move_uploaded_file($bassetmp, $target_pathbasse);
		$target_pathsoprano = "../Voix/soprano/";
		$target_pathsoprano = $target_pathsoprano . basename($soprano);
		move_uploaded_file($sopranotmp, $target_pathsoprano);
		$target_pathtenor = "../Voix/tenor/";
		$target_pathtenor = $target_pathtenor . basename( $tenor);
		move_uploaded_file($tenortmp, $target_pathtenor);
	}
	
	public static function getRepById($id)
	{
		$res = mysql_query("SELECT * FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / classe repertoire / fonction getRepById");
		$tuple = mysql_fetch_array($res);
		return new Repertoire($id, $tuple['audioR'],$tuple['texteR'],$tuple['altoR'],$tuple['basseR'],$tuple['sopranoR'],$tuple['tenorR']);
	}
	
	
	//suppression d'un morceau du repertoire
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
		$target_pathalto = "../Voix/alto/";
		$target_pathalto = $target_pathalto . $tuple['altoR'];
		unlink($target_pathalto);
		$target_pathbasse = "../Voix/basse/";
		$target_pathbasse = $target_pathbasse . $tuple['basseR'];
		unlink($target_pathbasse);
		$target_pathsoprano = "../Voix/soprano/";
		$target_pathsoprano = $target_pathsoprano . $tuple['sopranoR'];
		unlink($target_pathsoprano);
		$target_pathtenor = "../Voix/tenor/";
		$target_pathtenor = $target_pathtenor . $tuple['tenorR'];
		unlink($target_pathtenor);
		
	}
	
	public static function deletebdd($id)
	{
		$req = mysql_query("DELETE FROM repertoire WHERE idR = '$id'") or die("Erreur insertion / Classez Repertoire / Fonction delete");
		return true;
	}
	
	
	public static function changementRep($audio, $audiotmp, $texte, $textetmp, $alto, $altotmp, $basse, $bassetmp, $soprano, $sopranotmp, $tenor, $tenortmp)
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
		if($alto != null)
		{
			$target_pathalto = "../Voix/alto/";
			$target_pathalto = $target_pathalto . basename( $alto);
			move_uploaded_file($altotmp, $target_pathalto);
		}
		if($basse != null)
		{
			$target_pathbasse = "../Voix/basse/";
			$target_pathbasse = $target_pathbasse . basename( $basse);
			move_uploaded_file($bassetmp, $target_pathbasse);
		}
		if($soprano != null)
		{
			$target_pathsoprano = "../Voix/soprano/";
			$target_pathsoprano = $target_pathsoprano . basename($soprano);
			move_uploaded_file($sopranotmp, $target_pathsoprano);
		}
		if($tenor != null)
		{
			$target_pathtenor = "../Voix/tenor/";
			$target_pathtenor = $target_pathtenor . basename( $tenor);
			move_uploaded_file($tenortmp, $target_pathtenor);
		}	
		
	}
}
?>
	