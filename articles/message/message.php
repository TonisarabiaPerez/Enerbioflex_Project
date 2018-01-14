<?php

//$delimiters has to be array
//$string has to be array

require('mysql_connect.php');

function multiexplode ($delimiters,$string) {
  

// divise et sauvegarde dans le tableau $lauch
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    
   
    return  $launch;
    
}

$tb="data";
$text = "deb2*2017*008*30*10*12*42*0425\f/"; //3+4+2+2+2+2+2+4+10=31
 $taille=strlen($text);// retoune la taille de $text
intval($taille,10);// on passe $test en int pour les if

if($taille==31){  // 31 taille du message recu sans erreur
$exploded = multiexplode(array("*","\f/"),$text);
	
// on récupère le dernier id  creer pour définir le prochain
 $db= $bdd->query('SELECT MAX(id) FROM data ');
 $Max_id=$db->fetch();
 $Max_id2= $Max_id[0];
 $Max_id2++;

echo ($Max_id2);

 //on insère la nouvelle ligne
 $bdd->query( '   INSERT INTO data (id, nom,annee,mois,jour,heure,minute,seconde,donnee) VALUES ("'.$Max_id2.'","'.$exploded[0].'","'.$exploded[1].'","'.$exploded[2].'","'.$exploded[3].'","'.$exploded[4].'","'.$exploded[5].'","'.$exploded[6].'","'.$exploded[7].'")  ' );
print_r($exploded);

printf('ok');}
 else if($taille>31){printf("grand");}
 else if($taille<31){printf("petit");}


?>


