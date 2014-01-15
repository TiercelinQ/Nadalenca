<h1>Inscription</h1>
<hr />
	<form method="POST" action="./controlValidInscription.php">
		<fieldset>
		<h3>Veuillez remplir le formulaire d'inscription</h3>
			<label>Nom : </label><input type="text" name="nom" placeholder="Nom" required><br />
			<label>Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required><br />
			<label>Email : </label><input type="email" name="email" placeholder="Email" required><br />
			<label>Mot de passe : </label><input type="password" name="mdp" required><br />
			<label>Confirmation du mot de passe : </label><input type="password" name="mdpc" required><br />
			<label>Mot de passe Nadalenca* : </label><input type="password" name="mdpn" required><br />
			<input type="submit" value="Envoyer">
			<p>(*)Pour le mot de passe Nadalenca, veuillez contacter le président de l'association pour l'obtenir.</p>
		</fieldset>
	</form>

		