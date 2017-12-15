<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   
if(!isset($folder)) $folder=''; //NOTE: La variable $folder et les echo $folder servent à acceder aux fichiers depuis n'importe quelle page!?> 
<!DOCTYPE HTML>
<html> 

	<head>

		<title>Enerbioflex Think Tank</title>
	
		<meta charset="utf-8">
	
		<link rel="stylesheet" type="text/css" href="<?php echo $folder ?>accueil_2.css" />
	
		<link rel="icon" type="image/png" href="<?php echo $folder ?>Images/favicon.ico" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
		<link rel="stylesheet" href="css/click-trigger.css" type="text/css" />
		<script type="application/javascript" src="js/jquery.js"></script>
		<script type="application/javascript" src="js/ajaxTrigger.js"></script>

		<div id="fb-root"></div>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

	<body>
	
		<div id="page">
			<header>
				<a href="<?php echo $folder ?>accueil.php"><img class="logo" src="<?php echo $folder ?>Images/image logo.png" alt="logo"  /></a> 

				<!--
				<div id="zone_recherche">
					<input id="texte_recherche" type="text" placeholder="Rechercher" />
					<input id="bouton_recherche" type="image" src="Images/bouton_recherche.png" alt="Rechercher" />
				</div>
				-->

			
			</header>
		<div id="menu">
		<nav>
			<label for="show-menu" class="show-menu">Menu</label>
			<input type="checkbox" id="show-menu" role="button">
			<ul>
				<li><a href="<?php echo $folder ?>accueil.php">Accueil</a></li>
				<li><a href="<?php echo $folder ?>forum/menuForum.php">ThinkTank </a>
				<ul id="s-menu">
					<li><a href="<?php echo $folder ?>forum/menuForum.php">ThinkTank </a></li>
      				<li><a href="<?php echo $folder ?>visio/visio.php">Visioconférence</a></li>
      				<li><a href="<?php echo $folder ?>forum/menuForum.php">Forum</a></li>
    			</ul></li>
				<li><a href="<?php echo $folder ?>articles/menuArticle.php">Agriboncoin </a>
					<ul id="s-menu">
						<li><a href="<?php echo $folder ?>articles/menuArticle.php">Agriboncoin </a></li>
      					<li><a href="#">Offre</a></li>
      					<li><a href="#">Demande</a></li>
				    </ul></li>
     
				<li><a href="<?php echo $folder ?>supervision/index.php">Supervision </a>
				<?php if(empty($_SESSION['id'])){ ?>
				<li><a class="seconnecter" href="<?php echo $folder ?>membre/inscription.php">S'inscrire</a></li>
				<li><a class="seconnecter" href="<?php echo $folder ?>membre/index.php" >Se Connecter</a></li>
				<?php }else{ ?>
				<li><a href="<?php echo $folder ?>/membre/membre/profil.php">Mon Profil</a></li>
				<li><a class="sedeconnecter" href="<?php echo $folder ?>membre/deconnexion.php" >Se Déconnecter</a></li>
				<?php } ?>
			</ul>	
			
		</nav></div>
			
		<br/>
		<div id="main">