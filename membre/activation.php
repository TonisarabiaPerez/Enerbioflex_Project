<?php 
include('header.php');
$jeton = htmlspecialchars_decode($_GET['jeton']);
$jeton = htmlspecialchars($jeton);

$req = Bdd::ConnectBdd() -> prepare(SELECT.'id_membre'.JETONMAIL.JETONACTIVATION);
$req -> bindParam(':jeton',$jeton);
$req -> execute();

$id = $req->fetch(PDO::FETCH_ASSOC)['id_membre'];
if(!empty($id)){
	$req = Bdd::ConnectBdd() -> prepare(UPDATE.MEMBREZ.ACTIVMEMBRE.ID);
	$req -> bindValue(':activer',1);
	$req -> bindParam(':id',$id);
	$req -> execute();
} else redirection($folder.'erreur.php');
?>

<h1> Bienvenue sur EnerBioFlex Think Tank! </h1>
<hr width="100%" color="2a95be"/>
<p> Vous pouvez dès à présent vous connecter pour profiter de toutes les fonctionnalités du site. </p>
<p> N'oubliez pas de mettre à jour votre profil! <p>
<a class="myButton" href= "index.php">Se connecter</a>


<?php
include('footer.php');
?>
