<link rel="stylesheet" type="text/css" href="menu.css">
<?php
echo ' 
	<div id="menumembre" align="left">
		<ul id=menubarre>
			<li><a href="index.php" class="bouton">Accueil</a></li>
			<li><a href="messagerie.php" class="bouton">Messagerie</a></li>
			<li><a href="profil.php" class="bouton">Profil</a></li>
		</ul>
	</div>
	
	<h1>Bonjour '.Membre::info($_SESSION['id'], 'prenom').' '.Membre::info($_SESSION['id'], 'nom').'</h1>
	<hr width="100%"  color="2a95be"/>
	<br />';
?>