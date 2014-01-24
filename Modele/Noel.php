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
	
	//création d'un nouveau noel occitan dans la base de données noel
	public function create()
	{
			$idN = $this->idN;
			$lieuN = $this->lieuN;
			$dateDebN = $this->dateDebN;
			$dateFinN = $this->dateFinN;


			$req = "INSERT INTO noel (idN, lieuN, dateDebN, dateFinN) VALUES ('$idN','$lieuN','$dateDebN','$dateFinN')";
			$res = mysql_query($req) or die(mysql_error()); //die ("Erreur insertion :  Classe Noel / Fonction insertion noel occitan");
	}
	
	//suppression d'un noel occitan dans la base de donnée noel
	public static function delete($idN)
	{
		$req = mysql_query("DELETE FROM noel WHERE idN = '$idN'");
		mysql_query($req);
	}
	

	//Vérification si un noel occitan existe par son idN
	public static function existId($idN)
	{
		$req = mysql_query("SELECT count(*) FROM noel WHERE idN = '$idN'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		} 
}

?>

