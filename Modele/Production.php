<?php

include ("./config.php");

class Production
{
	private $idP;
	private $nomP;
	private $imageP;
	private $descriptionP;
	private $prixP;
	
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->idP;
	}

	public function getNom() 
	{ //un getter
		return $this->nomP;
	}

	public function getDescription() 
	{ //un getter
		return $this->descriptionP;
	}

	public function getPrix() 
	{ //un getter
		return $this->prixP;
	}

	


	public function __construct ($idP, $nomP, $imageP, $descriptionP, $prixP) 
	{
		$this->idP = null;
		$this->nomP = $nomP;
		$this->imageP =$impageP;
		$this->descriptionP = $descriptionP;
		$this->prixP = $prixP;
	}

	public function create()
	{
		$idP = NULL;
		$nomP = $this->nomP;
		$imageP = $this->imageP;
		$descriptionP = $this->descriptionP;
		$prixP = $this->prixP;
		$req = "INSERT INTO production (idP, nomP, imageP, descriptionP, prixP) VALUES ('$idP', '$nomP', '$imageP', '$descriptionP', '$prixP')";
		$res = mysql_query($req) or die(mysql_error()); //("Erreur insertion :  Classe Production / Fonction insertion production")
	}
	

	public function delete($idP)
	{
		$req = mysql_query("DELETE FROM production WHERE idP = '$idP'");
		mysql_query($req);
	}

	public static function existId($idP)
	{
		$req = mysql_query("SELECT count(*) FROM production WHERE idP = '$idP'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}

	}