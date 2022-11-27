<?php
$title = 'Login - Elections roi et reine Ubuntu 2k22';
require('Components/header.php');

?>


<div class="prize">
    <h2 class="titre_de_page" style="font-size:20px">King and Queen Elections</h2>
</div>

<form class="login" class="login" action="Components/login.php" method="POST" >
    <h4 class="title" align="center">Connectez-vous pour pouvoir voter</h4>
    
    <input type="email" value="" name="userEmail" id="email" placeholder="Entrez votre Email" required>

    <input type="text" value="" name="userName" id="name" placeholder="Entrez votre nom" required>

    <input type="hidden" name="idDevice" id="userDevice" required>

    <input type="submit" name="submit" value="Se Connecter">
</form>

<?php
require('Components/footer.php');
?>