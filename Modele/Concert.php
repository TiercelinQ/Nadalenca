<?php

include ("../config.php");


class Concert
{
	private $id;
	private $titreC;
	private $jourC;
	private $dateC;
	/*private $numJourC;
	private $moisC;
	private $anneeC;*/
	private $heureC;
	private $minuteC;
	private $lieuC;
	private $adresseC;
	private $villeC; 
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->id;
	}
	
	public function getTitreC() 
	{ //un getter
		return $this->titreC;
	}
	
	public function getJourC() 
	{ //un getter
		return $this->jourC;
	}
	
	public function getNumJourC() 
	{ //un getter
		return $this->numJourC;
	}
	
	public function getMoisC() 
	{ //un getter
		return $this->moisC;
	}
	
	public function getAnneeC() 
	{ //un getter
		return $this->anneeC;
	}
	
	public function getDateC() 
	{ //un getter
		return $this->dateC;
	}
	
	public function getHeureC() 
	{ //un getter
		return $this->heureC;
	}
	
	public function getMinuteC() 
	{ //un getter
		return $this->minuteC;
	}
	
	public function getLieuC() 
	{ //un getter
		return $this->lieuC;
	}
	
	public function getAdresseC() 
	{ //un getter
		return $this->adresseC;
	}
	
	public function getVilleC() 
	{ //un getter
		return $this->villeC;
	}
	
	//Un constructeur
	public function __construct ($id, $titreC, $jourC, $numJourC, $moisC, $anneeC, $heureC, $minuteC, $lieuC, $adresseC, $villeC) 
	{
		$this->id = null;
		$this->titreC = $titreC;
		$this->jourC = $jourC;
		$this->numJourC = $numJourC;
		$this->moisC = $moisC;
		$this->anneeC = $anneeC;
		$this->heureC = $heureC;
		$this->minuteC = $minuteC;
		$this->lieuC = $lieuC;
		$this->adresseC = $adresseC;
		$this->villeC = $villeC;
	}
	
	//création d'un nouveau concert dans la base de données concert
	public function create()
	{
		$req = "SELECT * FROM concert";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Concert / Fonction create");
		
		if (mysql_num_rows($res) == 0)
		{ // l'utilisateur n'existe pas.
			$titreC = $this->titreC;
			$jourC = $this->jourC;
			$numJourC = $this->numJourC;
			$moisC = $this->moisC;
			$anneeC = $this->anneeC;
			$heureC = $this->heureC;
			$minuteC = $this->minuteC;
			$lieuC = $this->lieuC;
			$adresseC = $this->adresseC;
			$villeC = $this->villeC;

			$req = "INSERT INTO concert (titreC, jourC, numJourC, moisC, anneeC, heureC, minuteC, lieuC, adresseC, villeC) VALUES ('$titreC','$jourC','$numJourC','$moisC','$anneeC','$heureC','$minuteC','$lieuC','$adresseC','$villeC')";
			$res = mysql_query($req) or die ("Erreur insertion :  Classe Concert / Fonction insertion concert");
		}
		else
		{
			return null/*'Cet email est déjà utilisé'*/;
		}
	}

	//vérification si un concert n'existe pas déjà dans la base de donnée concert
	public static function Exist($titreC)
	{
		$req = "SELECT * FROM utilisateur WHERE titreC='$titreC'";
		$res = mysql_query($req) or die ("Erreur insertion: Classe Concert / Fonction Exist");
		return (mysql_num_rows($res) != 0);
			
	}
	
	//suppression d'un concert dans la base de donnée concert
	public function delete($id)
	{
		$req = mysql_query("DELETE FROM concert WHERE id = '$id'");
		mysql_query($req);
	}
	
	public static function getConcertByTitre($titreC) 
	{ //une fonction statique
		$req = "SELECT * FROM concert WHERE titreC='$titreC'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Concert / Fonction getUtilisateurByTitre ");
		
		if (mysql_num_rows($res) == 0)
		{
			return null;
		}

		$tuple = mysql_fetch_array($res);
		return new Concert($tuple['id'], $titreC, $tuple['jourC'], $tuple['numJourC'], $tuple['moisC'], $tuple['anneeC'], $tuple['heureC'], $tuple['minuteC'], $tuple['lieuC'], $tuple['adresseC'], $tuple['villeC']);
		//$util->id = $id;
	}

}



?>

