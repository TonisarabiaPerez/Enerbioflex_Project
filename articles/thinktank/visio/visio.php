<?php
require ('connexion.php');
require ('header.php');
require ('function.php');

$req = $bd -> prepare('select lien from diffusion where onAir = 1 order by debut desc');
$req->execute();
$lien = $req->fetch(PDO::FETCH_ASSOC)['lien'];
?>
	
<h1> VisioConférence </h1>
<hr width="100%" color="2a95be"/>
<h2> En direct </h2>  
<?php 
if(isset($lien) && !empty($lien))
{
	$lien = getCodeVideo($lien);
	echo '<iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/'.$lien.'" allowfullscreen></iframe><br />';
	} else echo "Aucune diffusion en cours.<br/>";
?>

<a href="newvisio.php" class="myButton">+ Programmer une visio</a>

<fieldset class="fieldset">
<legend><h2> Anciennes visios </h2></legend>

<div id="visios">
<?php anciennesVisios($bd) ?>

</div>

<?php require('footer.php'); ?>