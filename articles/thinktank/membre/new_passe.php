<?php session_start();
include('header_simple.php');
if(!empty($_POST['envoi'])) {
	if(($msg=Connexion::passOubli($_POST['email']))===0)
		alertv("Un nouveau mot de passe vient de vous etre envoyé, pensez à vérifiez vos spams.");
	else
		alertr($msg);
}
?>
<h1>Mot de passe oublié</h1>
<hr color="7ad443">

<fieldset class = "fieldset">
	<form action="" method="post">
		<table align="center" class="form">
			<tr>
				<td valign="top" rowspan="4"><img src="../Images/default.png" width="70" height="70" /></td>
			</tr>		
			<tr>
				<td>Votre Email : </td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="envoi" value="Valider" class="input" /></td>
			</tr>
			<tr>
				<td><a href="index.php">Retour</a></td>
			</tr>
		</table>
	</form>
</fieldset>

<?php
include('footer_simple.php');
?>