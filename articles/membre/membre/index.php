<?php session_start();
include('header.php');
include ($folder.'visio/function.php');
include ($folder.'visio/afficherVisio.php');
date_default_timezone_set('Europe/Paris');
echo 
	' <div id="main">';
include('menu.php');
echo Message::nouveauNb($_SESSION['id']);
?>
<h2><center>Mes Posts</center></h2>
<hr width="25%" align="center" color="2a95be"/> 
<?php 
	$req = Bdd::connectBdd()->prepare('select titre from topic where topic.id_auteur = :id order by titre');
	$req->bindValue(':id',$_SESSION['id']);
	$req->execute();
	if( ($article = $req->fetch(PDO::FETCH_ASSOC)) ){
		echo '<ul id="liste">';
		do{
			extract($article);
			echo '
				<a href="'.$folder.'forum/forum.php?titre='.rawurldecode($titre).'"><li class="date_res">'.rawurldecode($titre).' </li></a>';
		} while($article = $req->fetch(PDO::FETCH_ASSOC));
		echo '</ul>';
	}
	else echo '<p><center> Vous n\'avez aucun post sur le forum. </center></p>';
?>		

<center><a href="<?php echo $folder ?>forum/creerSujet.php" class="myButton">Ecrire un Sujet</a></center>

<center><h2>Mes Visioconférences </h2></center>
<hr width="25%" align="center" color="2a95be"/>
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
	else echo '<p><center> Vous n\'avez aucune conférence prévue.</center> </p>';
		
?>	
</div>
</div>

<?php
include('footer.php');
?>
