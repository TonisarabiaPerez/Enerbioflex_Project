<?php session_start();
if(!isset($folder)) $folder=''; //NOTE: La variable $folder et les echo $folder servent à acceder aux fichiers depuis n'importe quelle page!?> 
<!DOCTYPE HTML>
<html> 

	<head>

		<title>Enerbioflex Think Tank</title>
	
		<meta charset="utf-8">
	
		<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>accueil.css">
	
		<link rel="icon" type="image/png" href="<?php echo $folder ?>Images/favicon.ico" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<link rel="stylesheet" href="css/click-trigger.css" type="text/css" />
		<script type="application/javascript" src="js/jquery.js"></script>
		<script type="application/javascript" src="js/ajaxTrigger.js"></script>

		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

	<body>
	
	<div id="page">
		<header>
			<a href="<?php echo $folder ?>index.php"><img class="logo" src="<?php echo $folder ?>Images/logo2.png" alt="logo"  /></a> 

			<!--
			<div id="zone_recherche">
				<input id="texte_recherche" type="text" placeholder="Rechercher" />
				<input id="bouton_recherche" type="image" src="Images/bouton_recherche.png" alt="Rechercher" />
			</div>
			-->

			<div id="reseaux">		
					<a href="http://www.facebook.com/enerbioflex/info/?tab=page_info" class="fb">
						<img class="reseau"  src="<?php echo $folder ?>Images/fb_v.jpg" alt="Facebook" />
					</a>

					<a href="https://twitter.com/enerbioflex">
						<img class="reseau" src="<?php echo $folder ?>Images/tw_v.jpg" alt="Twitter" />
					</a>
					
					<a href="https://www.youtube.com/channel/UCtRzZBgashQrI6sm1WXzGlA" >
						<img class="reseau" src="<?php echo $folder ?>Images/yt_v.jpg" alt="Youtube" />
					</a>
					
					<a href="https://www.linkedin.com/company/enerbioflex">
						<img class="reseau" src="<?php echo $folder ?>Images/in_v.jpg" alt="Linkedin" />
					</a>
					
					<a href="https://www.dailymotion.com">
						<img class="reseau" src="<?php echo $folder ?>Images/dm_v.jpg" alt="Dailymotion" />
					</a>
					
			</div>
		</header>
		
		<nav>
			<label for="show-menu" class="show-menu">Menu</label>
			<input type="checkbox" id="show-menu" role="button">
			<ul id="menu">
				<li><a href="<?php echo $folder ?>index.php">Accueil</a></li>
				<li><a href="<?php echo $folder ?>forum/menuForum.php">Forum </a></li>
				<li><a href="<?php echo $folder ?>articles/menuArticle.php">Articles </a></li>
				<li><a href="<?php echo $folder ?>visio/visio.php">VisioConférence</a></li>
				<li><a href="<?php echo $folder ?>infos.php" >Infos Pratiques</a></li>

			<?php if(empty($_SESSION['id'])){ ?>
				<li><a class="seconnecter" href="<?php echo $folder ?>membre/inscription.php">S'inscrire</a></li>
				<li><a class="seconnecter" href="<?php echo $folder ?>membre/index.php" >Se Connecter</a></li>
			<?php }else{ ?>
				<li><a href="<?php echo $folder ?>membre/membre/index.php">Mon Profil</a></li>
				<li><a class="sedeconnecter" href="<?php echo $folder ?>membre/deconnexion.php" >Se Déconnecter</a></li>
			<?php } ?>
				
			
			</ul>
		</nav>
		<br/>
		<div id="main">