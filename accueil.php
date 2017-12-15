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




	<div class="container">

		<div id="imgnews">
			
							
					<video width="100%" src="Images/video.mp4" type ="video/mp4" poster="Images/image.jpg" controls="controls"></video><a href="https://biteable.com/watch/energiculteur-1371899/216053c5c1b88a14cb167c40d591359dca2e43f4"></a> 				
				
	</div>
<H3 align="center">Energiculteur c’est quoi ? </H3>
			<div id="text">
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
	
						
					
			
	</div>

		
		
	<section class="post">
		<hr width="100%" color=2a95be/> 
		<h3> Les derniers posts</h3> 
		
			
			<div class="divResult">
  				<div class="tabPointO ">
				</div>
				<div class="tabPointO2">
				</div>
			 	<div class="tabPointO3">
				</div>
			</div>
	</section>
</div>

<?php
require('footer.php');
?>

	