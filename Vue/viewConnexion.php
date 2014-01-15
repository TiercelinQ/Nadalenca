<h1>CONNEXION</h1>
<hr />
<form method="POST" action="../Controleur/controlVerifConnexion.php">
					<fieldset>
							<label>Email : </label><input type="email" name="email" placeholder="email" required>
							<label>Mot de passe : </label><input type="password" name="mdp" required>
								<input type="submit" value="Connexion">	<br />
								<a href="./controlMdpoublie.php">Mot de passe oublié ?</a>
					</fieldset>
</form>