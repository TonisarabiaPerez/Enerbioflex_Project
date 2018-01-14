<?php session_start();
include('header.php');
if(!empty($_POST['changerPass'])) {
	extract($_POST);
	$msg = Membre::newPass($_SESSION['id'], $passActuel, $newPassUn, $newPassDe);
	if($msg === 0)
		alertv('Votre mot de passe a été changé avec succés.');
	else
		alertr($msg);

}
include('menu.php');
echo '
<div id="titre_principal">Changer Votre Mot de Passe </div>
<form action="" method="post">
<br />
<table width="70%" align="center">';

echo '<tr>
<td align="right">Votre mot de passe actuel : </td>
<td><input type="text" name="passActuel"></td>
</tr>
<tr>
<td align="right">Votre nouveau mot de passe : </td>
<td><input type="text" name="newPassUn"></td>
</tr>
<tr>
<td align="right">Saisir &agrave; nouveau le mot de passe : </td>
<td><input type="text" name="newPassDe"></td>
</tr>
<tr>
<td colspan="2" align="center"><br /><input type="submit" value="Valider le Nouveau Mot de Passe" name="changerPass" class="input"><br /><br /></td>
</tr>
</table>
</form>';
include('footer.php');
?>