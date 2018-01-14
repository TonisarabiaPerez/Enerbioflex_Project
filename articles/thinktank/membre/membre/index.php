<?php session_start();
include('header.php');
include ($folder.'visio/function.php');
include ($folder.'visio/afficherVisio.php');
date_default_timezone_set('Europe/Paris');

include('menu.php');
echo Message::nouveauNb($_SESSION['id']);
?>


<h2>Mes articles</h2>
<hr width="25%" align="left" color="2a95be"/> 
<?php 
	$req = Bdd::connectBdd()->prepare('select titre, description from article where id_auteur = :id order by titre');
	$req->bindValue(':id',$_SESSION['id']);
	$req->execute();
	if( ($article = $req->fetch(PDO::FETCH_ASSOC)) ){
		echo '<table>';
		do{
			extract($article);
			echo '
			<tr>
				<td class="date_res">'.rawurldecode($titre).' </td>
				<td> '.$description.' </td>
			</tr>';
		} while($article = $req->fetch(PDO::FETCH_ASSOC));
		echo '</table>';
	}
	else echo '<p> Vous n\'avez aucun article. </p>';
?>		

<a href="<?php echo $folder ?>articles/creerArticle.php" class="myButton">+ Ecrire un article</a>

<h2>Mes Visioconférences </h2>
<hr width="25%" align="left" color="2a95be"/>
<div id="horaires">
<?php 
	$currentdt = date('Y-m-d h:i');
	$req = Bdd::connectBdd()->prepare('SET lc_time_names = "fr_FR"');
	$req->execute();
	$req = Bdd::connectBdd()->prepare('select id, lien, debut, DATE_FORMAT(debut, "%W %d/%m %Y à %Hh%i") as date from diffusion where auteurId = :id order by debut desc');
	$req->bindValue(':id',$_SESSION['id']);
	$req->execute();
	
	if( ($visio = $req->fetch(PDO::FETCH_ASSOC)) ){
		if ( videoExiste($visio['lien']) ){
			echo '<table>';
			do{
				extract(getInfosVisio($visio));
				$debut= strtotime($visio['debut']);
				//Periode entre 10 min avant le debut et 1h après (fin)
				if( (time() > ($debut-600)) && (time() < ($debut+3600)) ){
					$but ='
						<form action="" method="post">
							<input type="hidden" name="id" value ="'.$visio['id'].'" />';
					if(!$onAir){
						$but.='
							<input type="submit" name="go" value="Lancer la visio" />
						</form>';
					} else {
						$but.='
							<input type="submit" name="stop" value="Arrêter la visio" />
						</form>';
					}
				} else {
					$but=NULL;
					if($onAir) {
						$rq = Bdd::connectBdd()->prepare(UPDATE.'diffusion set onAir=0 where lien = :lien');
						$rq -> bindParam(':lien', $_POST['lien']);
						$rq -> execute();
					}
				}
					
								
				$date = ucfirst($visio['date']);
				echo '
				<tr>
					<td class="date_res"> '.$date.' </td>
					<td> '.$titre.' </td>
					<td> '; if(isset($but)) echo $but.' </td>
				</tr>';
			} while($visio = $req->fetch(PDO::FETCH_ASSOC));
			echo '</table>';
		} else {
			$req = Bdd::connectBdd()->prepare('delete from diffusion where lien = :lien');
			$req -> bindParam(':lien',$visio['lien']);
			$req -> execute();
		}
	}
	else echo '<p> Vous n\'avez aucune conférence prévue. </p>';
		
?>	
</div>

<?php
include('footer.php');
?>