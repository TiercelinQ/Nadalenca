<h2>Ajout d'un membre</h2>
<hr />
	
	<form method="POST" action="./controlValidAddMembres.php">
		<fieldset>
			<label>Nom :</label><input type="text" name="nom" placeholder="Nom" required><br />
			<label>Prénom :</label><input type="text" name="prenom" placeholder="Prénom" required><br />
			<label>Email :</label><input type="email" name="email" placeholder="Email" required><br />
			<label>Mot de passe :</label><input type="password" name="mdp" required><br />
			<label>Confirmation du mot de passe :</label><input type="password" name="mdpc" required><br />
				<input type="submit" value="Envoyer">
		</fieldset>
	</form>