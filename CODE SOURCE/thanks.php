<?php
$title = 'Remerciements - Elections roi et reine Ubuntu 2k22';

require('Components/header.php');
    $userId = $_SERVER['REMOTE_ADDR'];

    $sql = "SELECT * FROM electeurs WHERE IdDevice='" .$userId. "'";
    $results = mysqli_query($conn, $sql);
    $user = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>

<div class="intro intro2" style="height:300px">
    <h2 class="titre_de_page">Merci pour votre vote</h2>
    <p class="sous-titre"><?php echo $user[0]['Name']; ?>, Votre vote a bel et bien été pris en compte !<br> Que votre excellente soirée se poursuive</p>
    <div class="blackScreen"></div>
    <img src="Images/thanks.png" height="344px" alt="Concert de OUf sur l'explanade du Saint John Plaza" >
</div>
<br><br>
<?php
clean_php_session();
require('Components/footer.php');
?>