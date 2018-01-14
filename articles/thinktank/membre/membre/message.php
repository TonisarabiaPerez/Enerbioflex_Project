<?php session_start();
include('header.php');
include('menu.php');
$idmess = html($_GET['id']);
Message::lu($idmess);
if(!empty($_POST['delete'])) {
	Message::efface($_POST['id']);
	redirection('messagerie.php');
}
if(!empty($_POST['repondre'])) {
	redirection('message_new.php?id='.Membre::info(Message::info($idmess, 'id_exp'), 'id'));
}
echo '<div id="principal">
<div id="titre_principal">Un message de '.Membre::info(Message::info($idmess, 'id_exp'), 'login').'</div>
<br />
<table width="80%" align="center">
<tr>
<td align="right" width="30%" class="titre_form">Expéditeur : </td>
<td>'.Membre::info(Message::info($idmess, 'id_exp'), 'login').'</td>
</tr>
<tr>
<td align="right" width="30%" class="titre_form">Sujet : </td>
<td>'.Message::info($idmess, 'titre').'</td>
</tr>
<tr>
<td align="right" width="30%" class="titre_form" valign="top">Message : </td>
<td>'.Smiley::affiche(Message::info($idmess, 'contenu')).'</td>
</tr>
<tr>
<td align="right" width="30%" class="titre_form">Action : </td>
<td align="center">
<form action="" method="post"><input type="submit" value="Répondre" name="repondre" class="input"><input type="hidden" name="id" value="'.$idmess.'">&nbsp;<input type="submit" value="Effacer" name="delete" class="input"></form>
</td>
</tr>
</table>
</div>';
include('footer.php');
?>
