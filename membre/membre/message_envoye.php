<?php session_start();
include('header.php');
include('menu.php');
echo '
<div id="titre_principal"><h2>Messages Envoyés<h2></div>
<br />
<table width="100%">
<tr>
<td align="center" colspan="4">
<a href="message_new.php" class="input">Nouveau message</a>
<a href="message_envoye.php" class="input">Messages Envoyés</a>
<a href="messagerie.php" class="input">Messages Reçus</a>
</td>
</tr>


<tr>
<td width="50px"></td>
<td align="center" class="titre_form" width="250px">Date</td>
<td align="center" class="titre_form" width="150px">Destinataire</td>
<td align="center" class="titre_form">Message</td>
</tr>
'.Message::listeEnvoi($_SESSION['id']).'
</table>';
include('footer.php');
?>

<!-- <tr>
<td align="center" colspan="4">
<img src="'.URLSITE.'/design/image/Non_Lu.png" width="24" height="24" align="absmiddle"> Nouveaux messages
<img src="'.URLSITE.'/design/image/Lu.png" width="24" height="24" align="absmiddle"> Anciens messages
<img src="'.URLSITE.'/design/image/faux.png" width="24" height="24" align="absmiddle"> Effacer par le destinataire
</td>
</tr> -->