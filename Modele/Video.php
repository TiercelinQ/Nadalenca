<?php

include ("./config.php");

class Video
{
	private $idV;
	private $titreV;
	private $lienV;
	private $descriptionV;
	
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->idV;
	}

	public function getTitre() 
	{ //un getter
		return $this->titreV;
	}

	public function getLien() 
	{ //un getter
		return $this->lienV;
	}

	public function getDescription() 
	{ //un getter
		return $this->descriptionV;
	}


	public function __construct ($idV, $titreV, $lienV, $descriptionV) 
	{
		$this->idV = null;
		$this->titreV = $titreV;
		$this->lienV = $lienV;
		$this->descriptionV = $descriptionV;
	}

	public function create()
	{
		$id= NULL;
		$titreV = $this->titreV;
		$lienV = $this->lienV;
		$descriptionV = $this->descriptionV;
		$req = "INSERT INTO video (idV, titreV, lienV, descriptionV) VALUES ('$idV','$titreV','$lienV','$descriptionV')";
		$res = mysql_query($req) or die(mysql_error()); //("Erreur insertion :  Classe Video / Fonction insertion video")
	}
	

	public function delete($idV)
	{
		$req = mysql_query("DELETE FROM video WHERE idV = '$idV'");
		mysql_query($req);
	}

	public static function existId($idV)
	{
		$req = mysql_query("SELECT count(*) FROM video WHERE idV = '$idV'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}

	}