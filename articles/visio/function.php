<?php
	if(!isset($folder)) $folder = '../';
	if($folder!='')
		include_once($folder.'function.php');
	
	//Retourne le code d'une vidéo dont le lien est passé en parametre
	function getCodeVideo($lien)
	{
		// retire http://www.dailymotion.com/video/ et l'eventuelle fin à l'adresse pour garder le code de la video
		$debut = explode("/video/",$lien,2);
        $fin = explode("_",$debut[1],2);
        return $fin[0];
	}
	
	//Retourne le lien et le titre d'une visio de la BDD passée en parametre
	function getInfosVisio($visio)
	{
		$code = getCodeVideo($visio['lien']);
			
		// recupere le titre
		$tags = json_decode(file_get_contents("https://api.dailymotion.com/video/".$code),true);
		$titre = htmlspecialchars($tags["title"]);
		return array(
				'lien' => $visio['lien'],
				'code' => $code,
				'titre' => $titre
				);
	}
	
	//Retourne true si la video existe sur les serveurs de Dailymotion
	function videoExiste($lien)
	{
		$code = getCodeVideo($lien);
		return (@file_get_contents("https://api.dailymotion.com/video/".$code)!==false);
	}
	
	//Supprime une visio
	function supprimerVisio($lien,$bd)
	{
		$req = $bdd->prepare('delete from diffusion where lien = :lien');
		$req -> bindParam(':lien',$lien);
		$req -> execute();
	}
	
	//Affiche les visio stockées, le param nombre permet de choisir le nombre de visio à afficher (15 par defaut)
	function anciennesVisios($bd,$nombre=15){
		$currentdt = date('Y-m-d h:i');
		$req = $bd->prepare('select lien from diffusion where debut < "'.$currentdt.'" order by debut desc');
		$req->execute();
		while(($visio = $req->fetch(PDO::FETCH_ASSOC)) && $nombre>0){
			extract(getInfosVisio($visio));
			if(videoExiste($lien)){
				echo '	<div class="unevid">
					<a href='.$lien.' target="_blank">
					<span> 
						<img src="http://www.dailymotion.com/thumbnail/160x120/video/'.$code.'"><br/>
						'.$titre.'<br/>				
					</span>
					</a>
				</div>'."\n";
				$nombre--;
			} else supprimerVisio($lien);
		}
	}
		
?>