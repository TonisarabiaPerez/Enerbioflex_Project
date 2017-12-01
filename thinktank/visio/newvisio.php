<?php
require ('connexion.php');
require ('header.php');
require ('function.php');
date_default_timezone_set('Europe/Paris');


if(empty($_SESSION['id']) || empty($_SESSION['jeton']) ){
header("Location:..\membre\index.php");	

}


if(empty($_POST['submit']))
{
	alertv("Une marche à suivre est nécessaire pour mettre en place une visio. <a href=visio.pdf class=myButton target=_blank>Télécharger (84ko)</a>");
	echo "";
}
else
{
	secureform($_POST);
	$date = $_POST['date_res'].' '.$_POST['time_res'];
	if(!empty($_POST['lien']) && preg_match("#^http://www.dailymotion.com/video/#",$_POST['lien']))
	{
		if(videoExiste(($_POST['lien'])))
		{
			$dt = DateTime::createFromFormat("Y-m-d H:i", $date);
			if(!preg_match('#:00$#',$date))	 $dt=false;
			if($dt !== false && !array_sum($dt->getLastErrors()) )
			{
				if($dt->getTimestamp() > time())
				{
					$req = $bd->prepare('select debut from diffusion');
					$req->execute();
					
					while($debut = $req->fetch(PDO::FETCH_ASSOC)['debut'])
					{
						// echo 'debut:'.strtotime($debut).' demandée:'.strtotime($date);
						if($debut == $date.':00') { $dt = false; break; }
					}
					if($dt !== false) 
					{//OK
						$code = getCodeVideo($_POST['lien']);
						$lien = 'http://www.dailymotion.com/video/'.$code;
						$req = $bd->prepare('insert into diffusion (auteurId,debut,lien) values ("'.$_SESSION['id'].'","'.$date.':00","'.$lien.'")');
						$req->execute();
						alertv('Votre visio est réservée. N\'oubliez pas de vous connecter le '.$_POST['date_res'].'.');
						
					} else $msg = "Cette date est déjà prise. Un écart de 1h entre chaque diffusions est nécessaire.";
					
				} else $msg = "Veuillez entrer une date non passée (au minimum 5 minutes après la date actuelle).";
				
			} else $msg = "Format de la date/heure incorrect (Rappel: impérativement de la forme AAAA-MM-JJ et hh:mm).".$date;
			
		} else $msg = "Vidéo introuvable ou supprimée de Dailymotion.";
		
	} else $msg = "Format du lien incorrect (Rappel: impérativement de la forme http://www.dailymotion.com/video/xxxxxxx...).<br/>Vérifiez que Mini-URL est bien décoché.";
	
	if(isset($msg)) alertr($msg);
}


?>
<h1> Programmer une Visioconférence </h1>
<hr width="100%" color="#2a95be"/>

<p> Votre visio doit être réservée sur une plage horaire disponible. <br/> </p>

<h2>Plages réservées:</h2>
<div id="horaires">
	<table>
		<?php
			$currentdt = date('Y-m-d h:i');
			$req = $bd->prepare('SET lc_time_names = "fr_FR"');
			$req->execute();
			$req = $bd->prepare('select auteurId, lien, DATE_FORMAT(debut, "%W %d %M %Y à %Hh%i") as date, debut from diffusion where debut>"'.$currentdt.'"');
			$req->execute();
			if($req->rowCount()>0)
				while($visio = $req->fetch(PDO::FETCH_ASSOC))
				{
					if(videoExiste($visio['lien'])) {
						extract(getInfosVisio($visio));
						$r = $bd->prepare('select login from membre where id = '.$visio['auteurId']);
						$r->execute();
						$auteur = $r->fetch(PDO::FETCH_ASSOC)['login'];
						$date = ucfirst($visio['date']);
						echo '		
						<tr>
							<td class="date_res"> '.$date.' </td>
							<td> '.$titre.' </td>
							<td> par '.$auteur.' </td>
						</tr>';
					} else supprimerVisio($visio['lien']);
					
				}
			else echo '<p> Aucune visioconférences prévues actuellement </p>';
		?>
	</table>
</div>

<form method="post">
<table>
	<tr>
		<td> Date </td>
		<td> <input type="date" name="date_res" placeholder="aaaa-mm-jj" required/> </td>
		<td> Heure </td>
		<td> 
			<select name="time_res">
			<?php for($i = 0; $i < 24; $i++) {
				$a = date("H:i", strtotime("$i:00"));
			  echo '<option value="'.$a.'">'.$a.'</option>';
			} ?>
			</select>
	</tr>
	<tr>
		<td> Lien </td>
		<td> <input type="text" name="lien" placeholder="http://www.dailymotion.com/video/xxxxxxx..." size=40 required/> </td>
	</tr>	
</table>
<input type="submit" name="submit" value="Réserver"/>

</form>


<?php require('footer.php'); ?>