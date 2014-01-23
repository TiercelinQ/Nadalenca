<h2>Ajout d'un Noel Occitan</h2>
<hr />

<form method="POST" action="./controlValidAddNoel.php"
	<fieldset>
			<label>Lieu : </label><input type="text" name="lieuN" placeholder="Eglise"  required><br />
			<label>Date Debut : </label><input type="number" name="dateDebN" placeholder="2010" required><br />
			<label>Date Fin : </label><input type="number" name="dateFinN" placeholder="2011" required><br />
			<input type="submit" value="Envoyer"><br />
		</fieldset>
</form>

<a href="../Controleur/controlAdministrateur.php">Retour au panneau d'administration</a>