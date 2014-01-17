<?php

include ("./config.php");

class Image
{
	private $idI;
	private $titreI;
	private $nomI;
	private $descriptionI;
	
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->idI;
	}

	public function getTitre() 
	{ //un getter
		return $this->titreI;
	}

	public function getNom() 
	{ //un getter
		return $this->lienI;
	}

	public function getDescription() 
	{ //un getter
		return $this->descriptionI;
	}


	public function __construct ($idI, $titreI, $nomI, $descriptionI) 
	{
		$this->idI = null;
		$this->titreI = $titreI;
		$this->nomI = $nomI;
		$this->descriptionI = $descriptionI;
	}

	public function create()
	{
		$idI= NULL;
		$titreI = $this->titreI;
		$nomI = $this->nomI;
		$descriptionI = $this->descriptionI;
		$req = "INSERT INTO image (idI, titreI, nomI, descriptionI) VALUES ('$idI','$titreI','$nomI','$descriptionI')";
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