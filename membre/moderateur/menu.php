<link rel="stylesheet" type="text/css" href="../membre/menu.css">
<?php
echo ' 
	<div id="menumembre" align="left">
		<ul id=menubarre>
			<li><a href="index.php" class="bouton">Accueil</a></li>
			<li><a href="messagerie.php" class="bouton">Messagerie</a></li>
			<li><a href="profil.php" class="bouton">Profil</a></li>
			<li><a href="listeMembre.php" class="bouton">Membres</a></li>
			<li><a class="sedeconnecter" href="'.URLSITE.'/deconnexion.php" class="bouton">Déconnexion</a></li>
		</ul>
	</div>
	
	<h1>Bonjour '.Membre::info($_SESSION['id'], 'nom').' '.Membre::info($_SESSION['id'], 'prenom').'.</h1>
	<hr width="100%"  color="2a95be"/>
	<br />';
?>