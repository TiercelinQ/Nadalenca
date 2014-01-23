<?php

include ("../config.php");

class Recrutement
{
	private $idR;
	private $nomR;
	private $prenomR;
	private $expeR;
	private $occR;
	private $telR;
	private $portableR;
	private $emailR;
	private $obsR;
	
	//les methodes:
	public function getIdR() 
	{ //un getter
		return $this->idR;
	}
	
	public function getNomR() 
	{ //un getter
		return $this->nomR;
	}
	
	public function getPrenomR() 
	{ //un getter
		return $this->prenomR;
	}
	
	public function getExpeR() 
	{ //un getter
		return $this->expeR;
	}

	public function getOccR() 
	{ //un getter
		return $this->occR;
	}

	public function getTelR() 
	{ //un getter
		return $this->telR;
	}

	public function getPortableR() 
	{ //un getter
		return $this->portableR;
	}
	
	public function getEmailR() 
	{ //un getter
		return $this->emailR;
	}

	public function getObsR() 
	{ //un getter
		return $this->obsR;
	}
	

	

	
	//Un constructeur
	public function __construct ($idR, $nomR, $prenomR, $expeR, $occR, $telR, $portableR, $emailR, $obsR) 
	{
		$this->idR = null;
		$this->nomR = $nomR;
		$this->prenomR = $prenomR;
		$this->expeR = $expeR;
		$this->occR = $occR;
		$this->telR = $telR;
		$this->portableR = $portableR;
		$this->emailR = $emailR;
		$this->obsR = $obsR;
	}
	
	//création d'un nouveau recrutement dans la base de données recrutement
	public function create()
	{

		$idR = $this->idR;
		$nomR = addslashes(htmlspecialchars($this->nomR));
		$prenomR = addslashes(htmlspecialchars($this->prenomR));
		$expeR = addslashes(htmlspecialchars($this->expeR));
		$occR = addslashes(htmlspecialchars($this->occR));
		$telR = addslashes(htmlspecialchars($this->telR));
		$portableR = addslashes(htmlspecialchars($this->portableR));
		$emailR = addslashes(htmlspecialchars($this->emailR));
		$obsR = addslashes(htmlspecialchars($this->obsR));

		$req = "INSERT INTO recrutement (idR, nomR, prenomR, expeR, occR, telR, portableR, emailR, obsR) VALUES ('$idR', '$nomR', '$prenomR', '$expeR', '$occR', '$telR', '$portableR', '$emailR', '$obsR')";
		$res = mysql_query($req) or die ("Erreur insertion :  Classe Recrutement / Fonction insertion recrutement");
	}
	
	//suppression d'un recrutement dans la base de donnée recrutement
	public static function delete($idR)
	{
		$req = "DELETE FROM recrutement WHERE idR = '$idR'";
		mysql_query($req);
	}

	//Vérification si un recrutement existe par son idM
	public static function existId($idR)
	{
		$req = mysql_query("SELECT count(*) FROM recrutement WHERE idR = '$idR'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		}
}



?>

