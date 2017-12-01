<?php session_start();
include('header.php');
include('menu.php');
switch(Membre::info($_GET['id'], 'niveau')) {
	case 1 : 
	$Niveau = 'Membre';
	break;
			
	case 2 : 
	$Niveau = 'Modérateur';
	break;
			
	case 3 : 
	$Niveau = 'Administrateur';
	break;
	
	case 4 : 
	$Niveau = 'Cr&eacute;ateur';
	break;
			
	case 5 :
	$Niveau = 'Banni';
	break;
}
echo '<div id="principal">
<div id="titre_principal">Profil de '.Membre::info($_GET['id'], 'login').', qui est '. $Niveau.'</div>
<br />
<table width="70%" align="center">
<tr>
<td align="right">
</td>
</tr>
</table>
<table width="70%" align="center">
<tr>
<td width="140px" rowspan="14" valign="top">
<img src="'.URLSITE.'/'.Avatar::membre(Membre::info($_GET['id'], 'id_avatar')).'" width="120" height="120" alt="Avatar" title="Avatar">
</td>
</tr>
<tr>
<td align="right" class="titre_form" width="150px">Date de Naissance : </td>
<td>'.Membre::info($_GET['id'], 'date_naissance').'</td>
</tr>
<tr>
<td align="right" class="titre_form">Civilité : </td>
<td>'; 
if(Membre::info($_GET['id'], 'civilite')=='3') { 
	echo 'Femme'; 
} 
else { 
	echo 'Homme'; 
} 
echo '</td>
</tr>
<tr>
<td align="right" class="titre_form">Nom : </td>
<td>'.Membre::info($_GET['id'], 'nom').'</td>
</tr>
<tr>
<td align="right" class="titre_form">Prénom :</td>
<td>'.Membre::info($_GET['id'], 'prenom').'</td>
</tr>
<tr>
<td align="right" class="titre_form">mail : </td>
<td>'.Membre::info($_GET['id'], 'mail').'</td>
</tr>
<tr>
<td align="right" class="titre_form">Adresse : </td>
<td>'.Membre::info($_GET['id'], 'adresse').'</td>
</tr>
<tr>
<td align="right" class="titre_form">Ville : </td>
<td>'.Membre::info($_GET['id'], 'ville').'</td>
</tr>
<tr>
<td colspan="3"><p>&nbsp;</p></td>
</tr>
<tr>
<td colspan="3" align="center" class="titre_form">Description :</td>
</tr>
<tr>
<td colspan="3">'.str_replace('<br />', "\n",Membre::info($_GET['id'], 'description')).'
</td>
</tr>
</table>
</div>';
include('footer.php');
?>
