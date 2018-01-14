<?php  
	require_once("connexion.php");
	require("header.php");
?>


<fieldset class="fieldset">
<legend>Forum</legend>
	<h1>Menu du Forum</h1>
	
	<section class="blocMF">
	
	<fieldset class="fieldset">
	<legend>Liste des sujets existants</legend>
	<table>
	
	<style>
		 td{margin-left:30%;}
	</style>
	
	
<?php
	$requete = $bd->prepare('SELECT titre, date_creation, id_auteur FROM topic');
	$requete->execute();
	while($ligne=$requete->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>
				<td><a href="forum.php?titre='. $ligne['titre'].'">' . rawurldecode($ligne['titre']) . '</a></td>
			</tr>';			
	}

?></table></section>

		<fieldset class="fieldset">
	<legend>Créer un nouveau sujet</legend>
		<a class="myButton" href="creerSujet.php">+ Mon sujet</a>
	
	

<?php
	require("footer.php");
?>