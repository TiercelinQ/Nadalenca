		</div>
<?php
		@session_start();
		if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
		{?>
			<ul id="footer_admin">
				<li><a href="./controlAdministrateur.php">Panneau d'administration</a> | 
				<li><a href="#">Qui sommes nous ?</a></li> | 
				<li><a href="./controlContact.php">Nous contacter</a></li> | 
				<li><a href="#">Plan du site</a></li> | 
				<li><a href="controlLiens.php">Liens</a></li>
			</ul>
<?php 	}
		else
		{?>
			<ul id="footer">
				<li><a href="#">Qui sommes nous ?</a></li> | 
				<li><a href="./controlContact.php">Nous contacter</a></li> | 
				<li><a href="#">Plan du site</a></li> | 
				<li><a href="controlLiens.php">Liens</a></li>
			</ul>
<?php 	}?>
	</div>
	</body>
</html>	