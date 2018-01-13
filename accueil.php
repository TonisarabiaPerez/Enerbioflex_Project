<?php
	require('header.php');
/*julien : test retirer identification au démarrage
	require_once('connexion.php');*/
?>	

	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>



<!-- --------------------------------- INFO + VIDEO ------------------------------------------ -->  
	<div id="intro">
		
		<div id="text">
		<h4 align="center">Energiculteur c’est quoi ? </h4>
			<link rel="stylesheet" type="text/css" href="accueil_2.css"/>
			
				<p align="center">Energiculteur est la plateforme d’aide à la décision 
				du monde agricole. Notre objectif principal est l’optimisation des 
				installations liées à l’énergie grâce à des prestations de conseil et d’entraide.</p>

				<p align="center">Des mesures via des capteurs de tous vos postes 
				consommant de l’énergie seront envoyées sur votre espace personnel. Les informations pourront ensuite être consultées sur votre PC, smartphone ou votre tablette. Cela vous permettra d’avoir une analyse en temps réel de vos consommations pour mieux les optimiser.
				</p>

				<p align="center">	Notre plateforme est aussi utilisée par des 
				professionnels qui apportent leurs connaissances et leurs conseils via des vidéos et des commentaires.</p>

				<p align="center">Enfin vous pouvez vendre, échanger, acheter du 
				matériel agricole via notre interface d’échange. </p>

				<p align="center">	N’hésitez plus, Energiculteur est la solution à vos 
				problématiques de décision. 
				</p>  
		</div> 	
		<img src="Images/image.jpeg" alt="fond"/>						
	</div>
	<div id="video">
		<h4>En savoir plus ?</h4>
		<video width="800" controls="controls" src="video.mp4"> 
    		<p itemprop="genre">Vous n'avez pas de navigateur moderne, ni flash d'installé sur Internet Explorer... suivez les liens ci-dessous pour télécharger les vidéos.</p>  
   		</video>
   	</div>
<!-- --------------------------------- FIN INFO + VIDEO ------------------------------------------ -->


		
		
	<section class="post">
		<h4> Les derniers posts</h4> 
		
			
			<div class="divResult">
				<a href="#">
  					<div class="tabPoint ">
  						<div class="titreP">
  							<h5>TEST</h5>
  						</div>
  						<div class="descr">
  							<p>test descr</p>
  							<div class="infoP">
  								<p>Par test le xx/xx/xxxx </p>
  							</div>	
  						</div>	
					</div>
				</a>
				<a href="#">
					<div class="tabPoint">
  						<div class="titreP">
  							<h5>TEST</h5>
  						</div>
  						<div class="descr">
  							<p>test descr</p>
  	   						<div class="infoP">
  								<p>Par test le xx/xx/xxxx </p>
  							</div>	
  						</div>			
					</div>
				</a>
				<a href="#">
				 	<div class="tabPoint">
  						<div class="titreP">
  							<h5>TEST</h5>
  						</div>
  						<div class="descr">
  							<p>test descr</p>
  							<div class="infoP">
  								<p>Par test le xx/xx/xxxx </p>
  							</div>	
  						</div>			 		
					</div>
				</a>
			</div>
	</section>
</div>

<?php
require('footer.php');
?>

	