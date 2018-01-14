<?php if(!isset($folder)) $folder=''; ?>
<!DOCTYPE html>
<html> 

	<head>
		<title>Enerbioflex</title>
	
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
			<div id="main">