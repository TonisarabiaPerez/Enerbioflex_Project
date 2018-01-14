	<?php session_start();
include('header.php');
include('menu.php');
if( isset ($_POST['id']) && !empty(['id'])){
	switch(Membre::info($_POST['id'], 'niveau')) {
		case 1 : 
		$Niveau = 'Administrateur';
		break;
				
		case 2 : 
		$Niveau = 'Moderateur';
		break;
				
		case 3 : 
		$Niveau = 'Membre';
		break;
				
		case 4 :
		$Niveau = 'Banni';
		break;
	}
	echo '<div id="principal">
	<div id="titre_principal">Profil de '.Membre::info($_POST['id'], 'login').', il est '. $Niveau.'</div>
	<br />
	<table width="70%" align="center">
	<tr>
	<td align="right">
	</td>
	</tr>
	</table>
	<table width="70%" align="center">
	'.//<tr>
	//<td width="140px" rowspan="14" valign="top">
	//<img src="'.URLSITE.'/'.Avatar::membre(Membre::info($_POST['id'], 'id_avatar')).'" width="120" height="120" alt="Avatar" title="Avatar">
	//</td>
	//</tr>
	'<tr>
	<td align="right" class="titre_form" width="150px">Date de Naissance : </td>
	<td>'.Membre::protectInfo($_POST['id'], 'date_naissance').'</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Civilité : </td>
	<td>'; 
	if(Membre::protectInfo($_POST['id'], 'civilite')=='3') { 
		echo 'Femme'; 
	} 
	else { 
		echo 'Homme'; 
	} 
	echo '</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Nom : </td>
	<td>'.Membre::protectInfo($_POST['id'], 'nom').'</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Prénom :</td>
	<td>'.Membre::protectInfo($_POST['id'], 'prenom').'</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Email : </td>
	<td>'.Membre::protectInfo($_POST['id'], 'mail').'</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Pays : </td>
	<td>'.Membre::protectInfo($_POST['id'], 'pays').'</td>
	</tr>
	<tr>
	<td align="right" class="titre_form">Ville : </td>
	<td>'.Membre::protectInfo($_POST['id'], 'ville').'</td>
	</tr>
	<tr>
	<td colspan="3"><p>&nbsp;</p></td>
	</tr>
	<tr>
	<td colspan="3" align="center" class="titre_form">Description :</td>
	</tr>
	<tr>
	<td colspan="3" align="center">'.str_replace('<br />', "\n",Membre::info($_POST['id'], 'description')).'
	</td>
	</tr>
	</table>
	</div>';
}
include('footer.php');
?>
