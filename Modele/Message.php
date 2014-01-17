<?php

include ("../config.php");

class Message
{
	private $idM;
	private $nomM;
	private $prenomM;
	private $emailM;
	private $sujetM;
	private $messageM;
	private $dateM;
	
	//les methodes:
	public function getIdM() 
	{ //un getter
		return $this->idM;
	}
	
	public function getNomM() 
	{ //un getter
		return $this->nomM;
	}
	
	public function getPrenomM() 
	{ //un getter
		return $this->prenomM;
	}
	
	public function getEmailM() 
	{ //un getter
		return $this->emailM;
	}
	
	public function getSujetM() 
	{ //un getter
		return $this->sujetM;
	}
	
	public function getMessageM() 
	{ //un getter
		return $this->messageM;
	}
	
	public function getDateM() 
	{ //un getter
		return $this->dateM;
	}
	
	//Un constructeur
	public function __construct ($idM, $nomM, $prenomM, $emailM, $sujetM, $messageM, $dateM) 
	{
		$this->idM = null;
		$this->nomM = $nomM;
		$this->prenomM = $prenomM;
		$this->emailM = $emailM;
		$this->sujetM = $sujetM;
		$this->messageM = $messageM;
		$this->dateM = $dateM;
	}
	
	//création d'un nouveau message dans la base de données message
	public function create()
	{
			$idM = $this->idM;
			$nomM = $this->nomM;
			$prenomM = $this->prenomM;
			$emailM = $this->emailM;
			$sujetM = addslashes($this->sujetM);
			$messageM = addslashes($this->messageM);
			$dateM = $this->dateM;


			$req = "INSERT INTO message (idM, nomM, prenomM, emailM, sujetM, messageM, dateM) VALUES ('$idM','$nomM','$prenomM','$emailM','$sujetM','$messageM','$dateM')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe Message / Fonction insertion message");
	}
	
	//suppression d'un message dans la base de donnée message
	public static function delete($idM)
	{
		$req = mysql_query("DELETE FROM message WHERE idM = '$idM'");
		mysql_query($req);
	}
	
	public static function getMessageBySujet($sujetM) 
	{ //une fonction statique
		$req = "SELECT * FROM message WHERE sujetM='$sujetM'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Message / Fonction getMessageBySujet ");
		
		if (mysql_num_rows($res) == 0)
		{
			return null;
		}

		$tuple = mysql_fetch_array($res);

		return new Message($tuple['idM'], $tuple['nomM'], $tuple['prenomM'], $tuple['emailM'], $tuple['sujetM'], $tuple['messageM'], $tuple['dateM']);
		//$util->id = $id;
	}


	public static function existId($idM)
	{
		$req = mysql_query("SELECT count(*) FROM message WHERE idM = '$idM'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		}
}



?>

