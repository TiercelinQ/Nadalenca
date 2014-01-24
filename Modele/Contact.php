<?php

include ("../config.php");

class contact
{
	private $idC;
	private $siegeSocialC;
	private $telfC;
	private $tetmC;
	private $adressePostalC;
	private $email;

	
	//les methodes:
	public function getIdC() 
	{ //un getter
		return $this->idC;
	}
	
	public function getSiegeSocialC() 
	{ //un getter
		return $this->siegeSocialC;
	}
	
	
	//Un constructeur
	public function __construct ($idC, $siegeSocialC,$telfC,$telmC,$adressePostalC,$email) 
	{
		$this->idC= null;
		$this->siegeSocialC = $siegeSocialC;
		$this->telfC = $telfC;
		$this->telmC = $telmC;
		$this->adressePostalC = $adressePostalC;
		$this->email = $email;
		
		
	}
	
	//création d'un nouveau contact dans la base de contact
	public function create()
	{
			$idC = $this->idC;
			$siegeSocialC = $this->siegeSocialC;
			$telfC = $this->telfC;
			$telmC = $this->telmC;
			$adressePostalC = $this->adressePostalC;
			$email = $this->email;
			


			$req = "INSERT INTO noel (idC, siegeSocialC, telfC, telmC, adressePostalC, email) VALUES ('$idC','$siegeSocialC','$telfC','$telmC','$adressePostalC','$email')";
			$res = mysql_query($req) or die(mysql_error()); //die ("Erreur insertion :  Classe Contact / Fonction insertion contact");
	}
	
	/*
	//suppression d'un contact  dans la base de donnée noel
	public static function delete($idN)
	{
		$req = mysql_query("DELETE FROM noel WHERE idN = '$idN'");
		mysql_query($req);
	}
	*/
	

	/*
	//Vérification si un noel occitan existe par son idN
	public static function existId($idN)
	{
		$req = mysql_query("SELECT count(*) FROM noel WHERE idN = '$idN'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		} 
		*/
}

?>

