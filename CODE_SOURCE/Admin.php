<?php
$title = 'Espace Administrateur - Elections roi et reine Ubuntu 2k22';
require('Components/header.php');

    $sql = "SELECT COUNT(*) FROM urne";
    $results = mysqli_query($conn, $sql);
    $electorNumber = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    
?>
    <br> <br>
    <div class="urnes">
        <h1 class="sous-titre" align="center">Il y a actuellement <?php echo $electorNumber; ?> votes pris en compte</h1>
    </div>
    <br>
    <div class="box">
    <a class="callToAction" href="results.php"> Visualiser les résultats</a>
    </div>

    <br><br>
<?php
require('Components/footer.php')
?>