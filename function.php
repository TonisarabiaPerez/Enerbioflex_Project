<?php
//Fonction securisation html
function html($text)
{
	return htmlspecialchars($text,ENT_QUOTES);
}

function secureform($tab)
{
	foreach($tab as $val)
	{
		$val = html($val);
	}
}

//Fonction alerte rouge
function alertr($msg) {
	echo '<div id="erreur">
			<div class="alert-r">
				<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
				'.$msg.'
			</div>
	</div>';
}

//Fonction alerte verte
function alertv($msg) {
	echo '<div id="valide">
			<div class="alert-v">
				<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
				'.$msg.'
			</div>
	</div>';
}
function dernierPost()
{
	try
{
	$bd = new PDO('mysql:charset=utf8mb4;dbname=energiculteur','energiculteur', 'EnerBIOflex2016');
	$bd->query('set names utf8');
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
	die('<p> <h1>ÉCHOUÉ!</h1>'.'Le plan à échoué. <br/>Erreur : '.$e->getMessage().'</p>');
}
	$reqPost=$bd->prepare("SELECT id_auteur,contenu,date_creation from post where id_topic=:id ORDER BY date_creation DESC LIMIT 1");
	$reqTopic=$bd->prepare("SELECT * from topic ORDER BY date_creation DESC LIMIT 3");
	$reqAuteur=$bd->prepare("SELECT pseudo from membre where id=:id");
	$i=0;
	$reqTopic->execute();
	$tabTopic=$reqTopic->fetch();
	$reqPost->bindValue(":id",$tabTopic["id"]);
//	$reqPost->bindValue(":date_creation",$tabTopic["date_creation"]);
	$reqPost->execute();
	while($i<3 and $tabPost=$reqPost->fetch())
	{
		$reqAuteur->bindValue(":id",$tabTopic["id_auteur"]);
		$reqAuteur->execute();
		$i++;
		echo '<a href="./forum/forum.php?titre='.$tabTopic["titre"].'">
  					<div class="tabPoint ">
  						<div class="titreP">
  							<h5>'.$tabTopic["titre"].'</h5>
  						</div>
  						<div class="descr">
  							'.substr($tabPost["contenu"],0,150).'
  							<div class="infoP">
  								<p>Par '.$reqAuteur->fetch()["pseudo"].' le '.substr($tabTopic["date_creation"],0,10) .'</p>
  							</div>	
  						</div>	
					</div>
				</a>';
		$tabTopic=$reqTopic->fetch();
		$reqPost->bindValue(":id",$tabTopic["id"]);
		//$reqPost->bindValue(":date_creation",$tabTopic["date_creation"]);
		$reqPost->execute();

	}
}
?>