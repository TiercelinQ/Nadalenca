<h1>Le Répertoire</h1>
<hr />

	<form method="post" action="./controlRepertoireRecherche.php">
		<fieldset>
			<label>Recherche :</label><input type="text" placeholder="Ex : Nadalet" name="recherche"><br /><!-- Fonction de recherche dans le répertoire-->
				<input type="submit" value="Ok" /><br />
		</fieldset>
	</form>
<?php
//Affichages des morceaux disponibles dans le repertoire
$res = mysql_query("SELECT * FROM repertoire") or die ("Erreur insertion, repertoire.php, affichage de tout" );

echo "<h3>Liste des morceaux</h3>
			<ul> ";
//Affichage sous forme de liste
while ($tuple = mysql_fetch_array($res))
{
	echo " <li>"; 
	echo "<a href="."../Controleur/controlRepertoireMorceau.php?idr=".$tuple['idr']. ">".$tuple['nom']."</a></li>";
}
	echo "</ul>";
?>

	<h2>Explication</h2>
	<hr />

<p>Lo còr altèrna dos repertòris : un repertòri de Nadal (Nadalets) balhat en concèrts dins lo periòde de las fèstas de cap d’an e un repertòri que mescla cants tradicionals e òbras classicas presentat lo demai de l’annada.</p>

<p>Los Nadalets son de cants de Nadal tradicionals del país d’òc, cantats a la velhada o suls camins que menan a la glèisa, del Lengadòc a la Provença, del Bearn al Lemosin o l’Auvèrnha. Mai d’un còp anonimes e adaptats sus d’aires populars, èran una expression simple de la fe, s’i retroba l’imaginacion eiretada de la grépia.</p>

<p>Las primièras polifonias sus de Nadalets interpretats per « Nadalenca » son l’òbra del canonge Joseph Roucairol archiprèire de la catedrala Sant Pèire de Mont-Pelhièr e figurade mancar pas de Mont-Pelhièr (Sonatz campanetas, Nadal de Pesenàs, Nadal tindaire, …)</p>

<p>Mai recentament, Isabelle Chauvallon (professor al conservatòri de Mont-Pelhièr) Denis Allemand (professor de musica a l’Educacion nacionala) et Françoise Veinturier ( professor al conservatòri de Besièrs) an realisat mantunas armonisacions per la corala (mai de 50 títols novèls) qualques unas son dins una publicacion venguda, fin 2007.</p>

<p>En completar d’annada sus annada son repertòri amb d’armonisacions novèlas, Nadalenca participa a l’enriquiment del patrimòni coral en occitan e tanben a sa difusion de cap als autres còrs e al public.</p>

	<h2>Le saviez-vous ?</h2>
	<hr />

	<div id="saviezvous">
	<p>Se los primièrs Nadalets son del sègle XII, lo periòde de produccion mai prolific es lo sègle XVII amb Nicolas Saboly (1615-1675) : Pastres, pastressas, Per non languir, Son tres òmes 
savis, Lei pastorèus, La camba me fai mal …e la capela pontificala Nòtra Dòna dels Dòms en Avinhon (1580-1610) : Un àngel dau cèl es vengut, Avètz ausit, Aquesta nuèch, Vautres 
que siatz assemblats, … D’autres Nadalets nos son porgits per d’autras encontradas occitanas coma La tèrra es freja (Lemosin bas) o Dejós una teulada (Lengadòc), … ( 
extraches del concèrt de l’Epifania balhat dins la glèisa Sant Laurenç de Latas lo 7 de genièr 2007)</p>

	<p>Uèi encara de Nadalets novèls son compausats, per Joan Larzac un d’eles, a l’escasença del Nadal occitan de Mont-Pelhièr : Un nòu, nòu, nòu (1999), Messatgièr de patz (1989), lo 
Nadalet de Salinèlas (1991), Cantem Nadal, detràs la nuòch ! (2006) …</p>
	</div>
