			</div>
<?php
			@session_start();
			//Vérifie si la session est une session admin
			if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
			{?>
				<!--Affiche ce footer précis avec le panneau d'administration-->
				<ul id="footer_admin">
					<li><a href="./controlAdministrateur.php">Panneau d'administration</a> | 
					<li><a href="./controlQuisommesnous.php">Qui sommes nous ?</a></li> | 
					<li><a href="./controlContact.php">Nous contacter</a></li> | 
					<li><a href="./controlPlandusite.php">Plan du site</a></li> | 
					<li><a href="controlLiens.php">Liens</a></li>
				</ul>
	<?php 	}
			else
			{?>
				<!--Sinon affiche ce footer précis -->
				<ul id="footer">
					<li><a href="./controlQuisommesnous.php">Qui sommes nous ?</a></li> | 
					<li><a href="./controlContact.php">Nous contacter</a></li> | 
					<li><a href="./controlPlandusite.php">Plan du site</a></li> | 
					<li><a href="controlLiens.php">Liens</a></li>
				</ul>
	<?php 	}?>
		</div>
	</body>
</html>	