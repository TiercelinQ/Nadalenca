	<!-- Affichage de l'image servant de favicon-->
	<link rel="icon" type="image/png" href="../Images/favicon.png" />

	<body>

	<div id="page">
		<div id="banniere">
			<!-- Affichage de l'image servant de banniere-->
			<img src="../Images/banniere_nada.png" alt="banniere" title="Association Polyphonique Nadalenca de Montpellier"/>

			<ul id="drapeau">
				<!-- Affichage des images servant d'icones pour passer d'une langue à une autre-->
				<li><a href="./controlAccueil.php"><img src="../Images/drapfr.png" title="Site de l'Association Nadalenca en français" alt="drapeau_fr"/></a></li>
				<li><a href="#"><img src="../Images/drapoc.png" title="Site de l'Association Nadalenca en occitan" alt="occitan_fr"/></a></li>
			</ul>
		</div>

		<div id="corps">
<?php
	//On vérifie qu'il y a une session en cours
	@session_start();
	//On appelle la Class Utilisateur pour la connexion et la vérification de la session
	include("../Modele/Utilisateur.php");
	if(isset($_SESSION['login']))
	{
		$email = $_SESSION['login']; 
		//On vérifie la session en fonction de l'email de l'utilisateur
		$profil = Utilisateur::getUtilisateurByEmail($email);
		?>
		<!-- Affichage du menu quand il y a une session-->
				<ul id="menu_mem">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="./controlRepertoire.php">REPERTOIRE</a></li>
					<li><a>MULTIMEDIA</a>
						<ul id="sousMenu">
							<li><a href="./controlImage.php">IMAGES</a></li>
							<li><a href="./controlVideo.php">VIDEOS</a></li>
						</ul></li>
					<li><a href="./controlProduction.php">PRODUCTIONS</a></li>
					<li><a href="./controlAnnuaire.php">ANNUAIRE</a></li>
					<li><a href="./controlProfil.php">PROFIL</a></li>
					<li><a href="./deconnexion.php">DECONNEXION</a></li>
				</ul>
				<h4>Bonjour <?php echo ($profil->getPrenom());?></h4>
			<div id="contenu">
									
	<?php
	}
	else
	{?>	
		<!-- Affichage du menu s'il n'y a pas de session en cours-->
			<ul id="menu_vis">
				<li><a href="./controlAccueil.php">ACCUEIL</a></li>
				<li><a href="./controlHistoire.php">HISTOIRE</a></li>
				<li><a href="./controlConcert.php">CONCERT</a></li>
				<li><a href="./controlProduction.php">PRODUCTIONS</a></li>
				<li><a href="./controlInscription.php">INSCRIPTION</a></li>
				<li><a href="./controlConnexion.php">CONNEXION</a></li>
			</ul>
		<div id="contenu">
<?php
}
?>
		