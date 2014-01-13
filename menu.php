	<body>
<?php
	if(isset($_SESSION['login']))
	{?>
			<h1>NADALENCA</h1>
				<ul id="menu">
					<li><a href="./index.php">ACCUEIL</a></li>
					<li><a href="./histoire.php">HISTOIRE</a></li>
					<li><a href="./concert.php">CONCERT</a></li>
					<li><a href="">REPERTOIRE</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="">MEMBRES</a></li>
					<li><a href="./profil.php">PROFIL</a></li>
					<li><a href="./deconnexion.php">DECONNEXION</a></li>
				</ul>

		
	<?php
	}
	else
	{?>	
			<h1>NADALENCA</h1>
				<ul id="menu">
					<li><a href="./index.php">ACCUEIL</a></li>
					<li><a href="./histoire.php">HISTOIRE</a></li>
					<li><a href="./concert.php">CONCERT</a></li>
					<li><a href="">PRODUCTIONS</a></li>
					<li><a href="./inscription.php">INSCRIPTION</a></li>
					<li><a href="./connexion.php">CONNEXION</a></li>
				</ul>
		</div>
<?php
}
?>
		