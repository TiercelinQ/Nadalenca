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
		return $this->nomI;
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
		$res = mysql_query($req) or die(mysql_error()); //("Erreur insertion :  Classe Image / Fonction insertion image")
	}
	

	public function delete($idI)
	{
		$req = mysql_query("DELETE FROM image WHERE idI = '$idI'");
		mysql_query($req);
	}

	public static function existId($idI)
	{
		$req = mysql_query("SELECT count(*) FROM image WHERE idI = '$idI'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}

	}