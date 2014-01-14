	<body>
<?php
	@session_start();
	if(isset($_SESSION['login']))
	{?>
			<h1>NADALENCA</h1>
				<ul id="menu">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="./controleurMainRep.php">REPERTOIRE</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="./membres.php">MEMBRES</a></li>
					<li><a href="./profil.php">PROFIL</a></li>
					<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0) {
						echo '<li><a href="./admin">ADMINISTRATION</a></li>';
					}?>
					<li><a href="./deconnexion.php">DECONNEXION</a></li>
				</ul>

		
	<?php
	}
	else
	{?>	
			<h1>NADALENCA</h1>
				<ul id="menu">
					<li><a href="./controlAccueil.php">ACCUEIL</a></li>
					<li><a href="./controlHistoire.php">HISTOIRE</a></li>
					<li><a href="./controlConcert.php">CONCERT</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="./inscription.php">INSCRIPTION</a></li>
					<li><a href="./controlConnexion.php">CONNEXION</a></li>
				</ul>
		
<?php
}
?>
		