<link rel="stylesheet" type="text/css" href="menu.css">
<?php
echo ' 
		<div id="bonjour">Bonjour '.Membre::info($_SESSION['id'], 'pseudo').'.'.'
	</div>'
?>
	<div id="menumembre">
		<ul id=menubarre>
			<li><a href="index.php" >Activités</a></li>
			<li><a href="messagerie.php" >Messagerie</a></li>
			<li><a href="profil.php">Profil</a></li>
		</ul>
	</div>
	<br>
