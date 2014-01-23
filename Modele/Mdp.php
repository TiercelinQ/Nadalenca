<?php

include ("../config.php");

class Mdp
{

	private $mdpInscri;

	//les methodes:
	public function getMdpInscri() 
	{ //un getter
		return $this->mdpInscri;
	}




	//Un constructeur
	public function __construct ($mdpInscri) 
	{
		$this->mdpInscri = $mdpInscri;

	}


	//création d'un nouveau mdp dans la base de données mdp
	public function create()
	{
		$mdpInscri = addslashes(htmlspecialchars($this->mdpInscri));

			$req = "INSERT INTO mdp (mdpInscri) VALUES ('$mdpInscri')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe MDP inscri / Fonction create MDP inscri");
	}

	//suppression d'un mdp dans la base de donnée mdp
	public static function delete($mdpInscri)
	{
		$req = mysql_query("DELETE FROM mdp WHERE mdpInscri = '$mdpInscri'");
		mysql_query($req);
	}

	//Vérification si un mdp existe déjà dans la base de données par son id
	public static function exist($mdpInscri)
	{
		$req = mysql_query("SELECT count(*) FROM mdp WHERE mdpInscri = '$mdpInscri'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
		}
	
	public static function getMdpById($id)
	{//une fonction statique
		$req ="SELECT * FROM mdp WHERE id ='$id'";
		$res = mysql_query($req) or die("Erreur insertion : Classe MDP / Fonction getMdpById ");
		
		if(mysql_num_rows($res) == 0)
		{//l'utilisateur n'existe pas
			return null;
		}
		
		$tuple = mysql_fetch_array($res);
		return ($tuple['mdpInscri']);		
	}
}