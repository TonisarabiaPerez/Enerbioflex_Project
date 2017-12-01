<?php
	require('header.php');
/*julien : test retirer identification au démarrage
	require_once('connexion.php');*/
?>	


	<div class="container">
		<div id="imgnews">
			<link rel="stylesheet" type="text/css" href="slider.css"/>
			<div class="boite">
				<div id="content-slider">
					<div id="slider">
						<div id="mask">
					
							<ul>
								<li id="first" class="firstanimation">	
									<img src="Images/presentation.jpg" alt="image1"/>
								</li>
								<li id="second"class="secondanimation">						
									<img src="Images/presentation1.jpg" alt="image2"/>
								</li>
								<li id="third" class="thirdanimation">		
									<img src="Images/presentation2.jpg" alt="image3"/>				
								</li>
								<li id="four"class="fourthanimation">						
									<img src="Images/presentation3.jpg" alt="image2"/>
								</li>
								<li id="five" class="fifthanimation">		
									<img src="Images/presentation4.jpg" alt="image3"/>				
								</li>
							</ul>
						</div>
						<div class="progress-bar"></div>
					</div>
				</div>
			</div>
			
			<div class="news">
				<a class="twitter-timeline"  href="https://twitter.com/search?q=enerbioflex" data-widget-id="812759679688384512">Tweets sur EnerBioFlex</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

		</div>
		
		<section class="post">
		<h1> Derniers Posts</h1>
		<hr width="100%" color="2a95be"/>
		
			<section class="prearticle">
				<fieldset class="fieldset">	
				<legend><a href="articles/articles.php">Articles</a></legend>
				<?php
					$req = $bd->prepare('SELECT id_auteur, DAY(date_creation) AS jour, MONTH(date_creation) AS mois, YEAR(date_creation) AS annee,HOUR(date_creation) AS heure, SECOND(date_creation) AS seconde, MINUTE(date_creation) AS minute, titre, image, contenu FROM article ORDER BY date_creation DESC');
					$req->execute();
					
					$count = 0;
						
				while( ($ligne=$req->fetch(PDO::FETCH_ASSOC)) && $count<2 ) {
					if (empty($ligne['image']) || $ligne['image']=='_') $ligne['image'] = 'default.png';
					echo '
					<div class="flexcom" >
						<div class="flexc1full">
							<img class="img_membre" src="Images/userFile/'.$ligne['image'].'" alt="image_article"/></br></br> Le '.
							$ligne['jour'].'/'.$ligne['mois'].'/'.$ligne['annee'].' </br>à '.
							$ligne['heure'].'h'.$ligne['minute'].'min' .$ligne['seconde'].'</br>
						</div>
						<div class="flexc2">
							<a class="titre" href="articles/articles.php?titre='. rawurlencode($ligne['titre']).'">' . rawurldecode($ligne['titre']) . '</a><br/>'.
							substr($ligne['contenu'], 0, 500).'... <a class="contenu" href="articles/articles.php?titre='. rawurlencode($ligne['titre']).'"> Lire la suite...</a></br>
						</div>
					</div>';
					$count++;
				}
					?>
					
			</section></br>
			<section class="visio">
				<fieldset class="fieldset">	
				<legend><a href="visio/visio.php">Visioconférences</a></legend>
						<div id="visios">
						<?php include ("visio/function.php"); 
							//afiiche les visio déjà difusées
							anciennesVisios($bd,4);
						?>
						</div>
			</section>
		<section>	
	</div>
	
<?php
require('footer.php')
?>

	