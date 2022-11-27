<?php
$title = 'Acceuil - Elections roi et reine Ubuntu 2k22';
require('Components/header.php');
$userId = $_SERVER['REMOTE_ADDR'];


if(isset($_GET['action']) && ($_GET['action'] == 'deconnection')){
    $sql = "UPDATE electeurs SET Connected = 0 WHERE IdDevice='" .$userId. "'";
    mysqli_query($conn, $sql);
    clean_php_session();
}

?>

<div class="intro">
    <h2 class="titre_de_page">Bal de Fin de Promotion</h2>
    <h3 class="sous-titre">Une soirée, Un hommage, Une élection</h3>
    <p class="normal">
        Ubuntu est le bal de fin d'etudes des étudiants de Saint Jérôme Douala. Sa raison d'être est de valoriser les nouveaux
        Ingénieurs fraichement sortis… Et comme il est de coutume, nous devons élire le plus beau couple de la soirée.
    </p>
    <div class="call">
        <a class="callToAction" href="<?php if(!isset($_SESSION['connected'])){ echo'login.php';   ?><?php } else{if($_SESSION['elections'] ==1){echo 'Error.php';} else{echo 'Vote.php';} ?><?php } ?>" >
            <?php if(!isset($_SESSION['connected'])){ ?>
                Se Connecter
            <?php } else{ ?>
                Allez voter, 
            <?php echo $_SESSION['userName'];} ?>
        </a>
        <a class="callToAction" href="Candidates.php">Voir les Candidat(e)s</a>
    </div>
    <div class="blackScreen"></div>
    <img src="Images/ImageIntro.png" alt="photo d'acceuil pour la circonstance">
</div>

<div class="prize">
    <h2 class="titre_de_page">Lots à gagner ce soir</h2>
    <div class="gift">
        <img src="Images/prize.jpg" alt="Séjour offert au SEME Beach">
        <span>Un séjour à l'hotel SEME Beach</span>
    </div>
</div>

<?php
require('Components/footer.php');
?>