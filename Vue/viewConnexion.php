<form method="POST" action="../Controleur/controlVerifConnexion.php">
					<fieldset>
						<legend>Formulaire de connexion</legend>
							<label>Email : </label><input type="email" name="email" placeholder="email" required>
							<label>Mot de passe : </label><input type="password" name="mdp" required>
								<input type="submit" value="Connexion">	<br />
								<a href="./controlMdpoublie.php">Mot de passe oublié ?</a>
					</fieldset>
</form>