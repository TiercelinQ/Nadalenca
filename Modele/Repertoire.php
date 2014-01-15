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
	
	//suppression d'un morceau dans la base de donnée repertoire
	public function delete($id)
	{
		$req = mysql_query("DELETE FROM repertoire WHERE idR = '$idR'");
		mysql_query($req);
	}
	
	public function changementRep($nomR,$audio, $texte, $voix1, $voix2, $voix3, $voix4)
	{
	}
}
?>
	