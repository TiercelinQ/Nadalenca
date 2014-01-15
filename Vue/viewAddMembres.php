				<form method="POST" action="./controlValidAddMembres.php">
					<fieldset>
						<legend>Formulaire d'inscription</legend>
							<label>Nom : </label><input type="text" name="nom" placeholder="Nom" required>
							<label>Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required><br />
							<label>Email : </label><input type="email" name="email" placeholder="Email" required><br />
							<label>Mot de passe : </label><input type="password" name="mdp" required>
							<label>Confirmation du mot de passe : </label><input type="password" name="mdpc" required><br />
								<input type="submit" value="Envoyer">
					</fieldset>
				</form>