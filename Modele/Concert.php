<?php

include ("./config.php");


class Concert
{
	private $id;
	private $titreC;
	private $dateC;
	private $heureC;
	private $minuteC;
	private $lieuC;
	private $adresseC;
	private $villeC; 
	private $prixC;
	
	//les methodes:
	public function getId() 
	{ //un getter
		return $this->id;
	}
	
	public function getTitreC() 
	{ //un getter
		return $this->titreC;
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

	public function getPrixC() 
	{ //un getter
		return $this->prixC;
	}
	
	//Un constructeur
	public function __construct ($id, $titreC, $dateC, $heureC, $minuteC, $lieuC, $adresseC, $villeC, $prixC) 
	{
		$this->id = null;
		$this->titreC = $titreC;
		$this->dateC = $dateC;;
		$this->heureC = $heureC;
		$this->minuteC = $minuteC;
		$this->lieuC = $lieuC;
		$this->adresseC = $adresseC;
		$this->villeC = $villeC;
		$this->prixC =$prixC;
	}
	
	//création d'un nouveau concert dans la base de données concert
	public function create()
	{
			$id= NULL;
			$titreC = addslashes(htmlspecialchars($this->titreC));
			$dateC = $this->dateC;
			$heureC = $this->heureC;
			$minuteC = $this->minuteC;
			$lieuC = $this->lieuC;
			$adresseC = addslashes(htmlspecialchars($this->adresseC));
			$villeC = addslashes(htmlspecialchars($this->villeC));
			$prixC = $this->prixC;
			$req = "INSERT INTO concert (id, titreC, dateC, heureC, minuteC, lieuC, adresseC, villeC, prixC) VALUES ('$id','$titreC','$dateC','$heureC','$minuteC','$lieuC','$adresseC','$villeC', '$prixC')";
			$res = mysql_query($req) or die(mysql_error()); //("Erreur insertion :  Classe Concert / Fonction insertion concert")
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

	public static function existId($id)
	{
		$req = mysql_query("SELECT count(*) FROM concert WHERE id = '$id'");
		$itsOk=mysql_fetch_row ($req);
		return($itsOk[0] !=0);
	}
	
	public static function getConcertByTitre($id) 
	{ //une fonction statique
		$req = "SELECT * FROM concert WHERE id='$id'";
		$res = mysql_query($req) or die ("Erreur insertion : Classe Concert / Fonction getUtilisateurByTitre ");
		
		if (mysql_num_rows($res) == 0)
		{
			return null;
		}

		$tuple = mysql_fetch_array($res);
		return new Concert($tuple['id'], $tuple['titreC'], $tuple['dateC'], $tuple['heureC'], $tuple['minuteC'], $tuple['lieuC'], $tuple['adresseC'], $tuple['villeC'], $tuple['prixC']);
	}

    public static function modifConcert($id, $titreC, $dateC, $heureC, $minuteC, $lieuC, $adresseC, $villeC, $prixC)
    {//Une fonction qui change les informations de l'utilisateur    
        $req = "SELECT * FROM concert WHERE titreC='$titreC'";
        $res = mysql_query($req) or die ("Erreur insertion : Classe Concert / Fonction modifConcert Debut ");
        $tuple = mysql_fetch_array($res);
            
		if($tuple['dateC'] != $dateC) 
		{
			$req1 = "UPDATE concert SET dateC='$dateC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Concert / Fonction changeDate");
		}
		
		if($tuple['heureC'] != $heureC)
		{
			$req1 = "UPDATE concert SET heureC='$heureC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Concert / Fonction changeHeure");
		}
		
        if($tuple['minuteC'] != $minuteC)
        {
            $req1 = "UPDATE concert SET minuteC ='$minuteC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Concert / Fonction changeMinutE");
        }
        
		if($tuple['lieuC'] != $lieuC)
		{
			$req1 = "UPDATE concert SET lieuC ='$lieuC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe concert / Fonction changeLieu");
		}
		
		if($tuple['adresseC'] != $adresseC)
		{
			$req1 = "UPDATE concert SET adresseC ='$adresseC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Concert / Fonction changeAdresse");
		}
		
        if($tuple['villeC'] != $villeC)
        {
            $req1 = "UPDATE concert SET villeC = '$villeC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Concert / Fonction changeVille");
        }
            
        if($tuple['prixC'] != $prixC)
        {
            $req1 = "UPDATE concert SET prixC = '$prixC' WHERE titreC ='$titreC'";
			$res = mysql_query($req1) or die("Erreur insertion : Classe Utilisateur / Fonction changenPrix");
        }

		return new Concert($tuple['id'], $tuple['titreC'], $tuple['dateC'], $tuple['heureC'], $tuple['minuteC'], $tuple['lieuC'], $tuple['adresseC'], $tuple['villeC'], $tuple['prixC']);
    }

}



?>

