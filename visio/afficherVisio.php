<?php
//Pour la visio
$bd = Bdd::connectBdd();
$req = $bd -> prepare('select onAir from diffusion order by debut desc');
$req->execute();
if( ($req->fetch(PDO::FETCH_ASSOC)['onAir'])==0 ) $onAir = false;
else $onAir = true;
if(isset($_POST['id'])){
	if(isset($_POST['go'])) {
		$onAir = true;
		$msg = "Vous êtes en direct!";
		$rq = $bd->prepare('update diffusion set onAir=1 where id = :id');	
	} else {
		$onAir = false;
		$msg = "Vous n'êtes plus en direct.";
		$rq = $bd->prepare('update diffusion set onAir=0 where id = :id');
	}
	$rq -> bindValue(':id', trim($_POST['id']));
	$rq -> execute();
}
?>