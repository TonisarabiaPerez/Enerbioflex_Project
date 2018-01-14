<?php 
session_start();
$connect = 'config.php';
if(!file_exists($connect)) {
	header('Location: install/');
}
include('header_simple.php');
if(!empty($_POST['connect'])) {
	$co = Connexion::connexionCreate();
	if($co=="0") {
		echo '<center>
		<br />
		Redirection en cours ...
		<br />
		</center>';
		redirection("./index.php", $time=3);
	}
	else {
		/*modifications julien*/
		echo '<center>
		<br />
		Connexion impossible ...
		<br />
		</center>';
		redirection("../", $time=3);
	
		/* code initial des étudiants   alert($co.' <a href="index.php">Retour</a>');*/
	}
}
else {
	$captcha = new Captcha;
	echo '
	<h1>Connexion</h1>
	<hr width="100%" color="7ad443">
	<fieldset class="fieldset">
	<form action="" method="post">
	<table align="center" class="form">
	<tr>
	<td colspan="3" align="center" class="titre_form"></td>
	</tr>
	<tr>
	<td valign="top" rowspan="4"><a href="../accueil.php"><img src="../Images/default.png" width="70" height="70" /></td>
	</tr>
	<tr>
	<td>Identifiant : </td>
	<td><input type="text" name="login" /></td>
	</tr>
	<tr>
	<td>Mot de passe : </td>
	<td><input type="password" name="pass" /></td>
	</tr>
	<tr>
	<td>'.$captcha->captcha().'</td>
	<td><input type="text" name="captcha" /></td>
	</tr>
	<tr>
	<td colspan="3" align="center"><input type="submit" name="connect" value="Se Connecter" class="input" /></td>
	</tr>
	<tr>
	<td align="center" colspan="3"><br /><a href="inscription.php">S\'Inscrire</a> - <a href="new_passe.php">Mot de passe oublié;</a></td>
	</tr>
	</table>
	</form> 
	</fieldset>';
}
include('footer_simple.php');
?>