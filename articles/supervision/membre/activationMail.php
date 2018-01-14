<?php 
include('header.php');
Connexion::deconnexion($redirection = "");
?>

<h2>Vous devez activer votre compte.</h2>
<p>Vous devez avoir re&ccedil;u un mail expliquant comment faire.<br />
Pensez &agrave; regarder dans vos spams.</p>
<img id="erreur" src="../Images/erreur.jpg" alt="erreur" /> 

<?php
include('footer.php');
?>