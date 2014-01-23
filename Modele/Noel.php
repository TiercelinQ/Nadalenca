<?php

include ("../config.php");

class Noel
{
	private $idN;
	private $lieuNn;
	private $dateDebN;
	private $dateFinN;

	
	//les methodes:
	public function getIdN() 
	{ //un getter
		return $this->idN;
	}
	
	public function getLieuN() 
	{ //un getter
		return $this->lieuN;
	}
	
	public function getDateDebN() 
	{ //un getter
		return $this->dateDebN;
	}
	
	public function getDateFinN() 
	{ //un getter
		return $this->dateFinN;
	}
	
	
	//Un constructeur
	public function __construct ($idN, $lieuN, $dateDebN, $dateFinN) 
	{
		$this->idN = null;
		$this->lieuN = $lieuN;
		$this->dateDebN = $dateDebN;
		$this->dateFinN = $dateFinN;

	}
	
	//création d'un nouveau message dans la base de données message
	public function create()
	{
			$idN = $this->idN;
			$lieuN = $this->lieuN;
			$dateDebN = $this->dateDebN;
			$dateFinN = $this->dateFinN;


			$req = "INSERT INTO noel (idN, lieuN, dateDebN, dateFinN) VALUES ('$idN','$lieuN','$dateDebN','$dateFinN')";
			$res = mysql_query($req) or die(mysql_error()); //die ("Erreur insertion :  Classe Noel / Fonction insertion message");
	}
	
	//suppression d'un message dans la base de donnée message
	public static function delete($idM)
	{
		$req = mysql_query("DELETE FROM noel WHERE idN = '$idN'");
		mysql_query($req);
	}
	

	/*//Vérification si un message existe par son idM
	public static function existId($idM)
	{
		$req = mysql_query("SELECT count(*) FROM message WHERE idM = '$idM'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		} */
}



?>

