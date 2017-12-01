<?php session_start();
include('header.php');
if(!empty($_POST['changeNaissance'])) {
	Membre::profilVisibilite($_SESSION['id'], 'date_naissance');
}
if(!empty($_POST['changeCivilite'])) {
	Membre::profilVisibilite($_SESSION['id'], 'civilite');
}
if(!empty($_POST['changeNom'])) {
	Membre::profilVisibilite($_SESSION['id'], 'nom');
}
if(!empty($_POST['changePrenom'])) {
	Membre::profilVisibilite($_SESSION['id'], 'prenom');
}

if(!empty($_POST['changeSite'])) {
	Membre::profilVisibilite($_SESSION['id'], 'site');
}
if(!empty($_POST['changeTel'])) {
	Membre::profilVisibilite($_SESSION['id'], 'tel');
}
if(!empty($_POST['changeVille'])) {
	Membre::profilVisibilite($_SESSION['id'], 'ville');
}
if(!empty($_POST['maj'])) {
	extract($_POST);
	if(Message::interdit($description)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			Membre::majProfil($_SESSION['id'], $naissance, $civilite, $nom, $prenom, $adresse, $description);
		}
		else {
			$err = 'Votre adresse email n\'est pas conforme,<br />veuillez recommencer la mise &agrave; jour de votre profil.';
		}
	}
	else {
		$err = 'Votre description contient du language sms ou des mots interdits,<br />veuillez recommencer la mise &agrave; jour de votre profil.';
	}
}
include('menu.php');
echo '<div id="principal">
<div id="titre_principal">Votre Profil '.Membre::info($_SESSION['id'], 'pseudo').'</div>
<form action="" method="post">
<table width="70%" align="center">';
if(!empty($err)) {
	echo '<tr>
<td colspan="3" align="center">
<br />
'.$err.'
<br /><br />
</td>
</tr>';
}
echo '<tr>
<td width="140px" rowspan="14" valign="top">
<input type="hidden" name="id_avatar" value="'.Membre::info($_SESSION['id'], 'id_avatar').'">
'.//<img src="'.URLSITE.'/'.Avatar::membre(Membre::info($_SESSION['id'], 'id_avatar')).'" width="120" height="120" alt="Avatar" title="Avatar"><br />
<a href="avatar.php" class="input">&nbsp;Changer d\'Avatar&nbsp;</a> 
</td>
</tr><tr>
<td align="right" class="titre_form">Date de Naissance : </td>
<td>
<input type="text" name="naissance" value="'.Membre::info($_SESSION['id'], 'naissance').'">
</td><td>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'naissance').'" name="changeNaissance" class="input">
</td>
</tr><tr>
<td align="right" class="titre_form">Genre : </td>
<td>
<input name="civilite" type="radio" value="1" ';
if(Membre::info($_SESSION['id'], 'civilite')=='1') { 
	echo 'checked'; 
}
echo '>Homme <input name="civilite" type="radio" value="3" ';
if(Membre::info($_SESSION['id'], 'civilite')=='3') { 
	echo 'checked'; 
}
echo '>Femme
</td><td>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'civilite').'" name="changeGenre" class="input">
</td>
</tr><tr>
<td align="right" class="titre_form">Votre Nom : </td>
<td>
<input type="text" name="nom" value="'.Membre::info($_SESSION['id'], 'nom').'">
</td><td>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'nom').'" name="changeNom" class="input">
</td>
</tr><tr>
<td align="right" class="titre_form">Votre Pr&eacute;nom :</td>
<td> 
<input type="text" name="prenom" value="'.Membre::info($_SESSION['id'], 'prenom').'">
</td><td>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'prenom').'" name="changePrenom" class="input">
</td>
</tr><tr>
<td align="right" class="titre_form">Votre Email : </td>
<td>
<input type="text" name="mail" value="'.Membre::info($_SESSION['id'], 'mail').'">
</td><td>
<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'mail').'" name="changeEmail" class="input">
</td></tr>
	<tr>
	<td align="right" class="titre_form">Votre Ville : </td>
	<td>
	<input type="text" name="ville" value="'.Membre::info($_SESSION['id'], 'ville').'">
	</td><td>
	<input type="submit" value="'.Membre::visibilite($_SESSION['id'], 'ville').'" name="changeVille" class="input">
	</td>
	</tr>
<tr>
<td align="right" class="titre_form">Recevoir les emails de l\'espace membre : </td>
<td>
<select name="mailing">
<option value="1" ';
if(Membre::info($_SESSION['id'], 'mailing')=='1') { 
	echo 'checked'; 
} 
echo '>Oui</option>
<option value="0" ';
if(Membre::info($_SESSION['id'], 'mailing')=='0') { 
	echo 'checked'; }
echo '>Non</option>
</select>
</td>
</tr><tr>
<td align="right" colspan="4">
<a href="change_pass.php" class="input">&nbsp;Changer le mot de passe&nbsp;</a>
</td>
</tr><tr>
<td colspan="3"><p>&nbsp;</p></td>
</tr><tr>
<td colspan="3" align="center" class="titre_form">Votre Description :</td>
</tr><tr>
<td colspan="3" align="center">
<textarea name="description" cols="80" rows="5">'.str_replace('<br />', "\n",Membre::info($_SESSION['id'], 'description')).'</textarea>
</td>
</tr><tr>
<td colspan="3" align="center">
<br />
<input type="submit" value="Mettre &agrave; jour le Profil" name="maj" class="input">
<br /><br />
</td>
</tr>
</table>
</form>
</div>';
include('footer.php');
?>