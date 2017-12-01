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

?>