<?php
$title = 'Résultats - Elections roi et reine Ubuntu 2k22';
require('Components/header.php');

    $sql = "TRUNCATE resultat";
    $results = mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne";
    $results = mysqli_query($conn, $sql);
    $electorNumber = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];



    $sql = "SELECT COUNT(*) FROM urne WHERE King='Florian MOUKAM'";
    $results = mysqli_query($conn, $sql);
    $florianMOUKAM = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO resultat(Name,Average) VALUES ('Florian MOUKAM',$florianMOUKAM)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE King='SOUOP ROLAND'";
    $results = mysqli_query($conn, $sql);
    $rolandSOUOP = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO resultat(Name,Average) VALUES ('SOUOP ROLAND', $rolandSOUOP)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE King='Dimitri EPOH'";
    $results = mysqli_query($conn, $sql);
    $dimitriEPOH = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO resultat(Name,Average) VALUES ('Dimitri EPOH', $dimitriEPOH)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE King='Steave MANGA'";
    $results = mysqli_query($conn, $sql);
    $steveMANGA = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO resultat(Name,Average) VALUES ('Steve MANGA', $steveMANGA)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE King='HAROLD'";
    $results = mysqli_query($conn, $sql);
    $eddyTANA = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO resultat(Name,Average) VALUES ('HAROLD', $eddyTANA)";
    mysqli_query($conn, $sql);

    $sql = "TRUNCATE queens";
    $results = mysqli_query($conn, $sql);

    
    $sql = "SELECT COUNT(*) FROM urne WHERE Queen='NGANSO'";
    $results = mysqli_query($conn, $sql);
    $ondoaPASCALINE = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO queens(Name,Average) VALUES ('Pascaline ONDOA',$ondoaPASCALINE)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE Queen='Oceanne YEBCHUE'";
    $results = mysqli_query($conn, $sql);
    $oceanneYEBCHUE = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO queens(Name,Average) VALUES ('Oceanne YEBCHUE',$oceanneYEBCHUE)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE Queen='Elsa NUADJE'";
    $results = mysqli_query($conn, $sql);
    $elsaNUADJE = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO queens(Name,Average) VALUES ('Elsa NUADJE',$elsaNUADJE)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE Queen='Gloria DIWONGUI'";
    $results = mysqli_query($conn, $sql);
    $gloriaDIWONGUE = mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO queens(Name,Average) VALUES ('Gloria DIWONGUI', $gloriaDIWONGUE)";
    mysqli_query($conn, $sql);

    $sql = "SELECT COUNT(*) FROM urne WHERE Queen='Luisa BESSOM'";
    $results = mysqli_query($conn, $sql);
    $luisaBESSOM= mysqli_fetch_all($results, MYSQLI_ASSOC)[0]['COUNT(*)'];
    $sql = "INSERT INTO queens(Name,Average) VALUES ('Luisa BESSOM', $luisaBESSOM)";
    mysqli_query($conn, $sql);

    // Display the result on the screen
    $sql = "SELECT * FROM resultat ORDER BY Average DESC";
    $resultats = mysqli_query($conn, $sql);
    $kings = mysqli_fetch_all($resultats, MYSQLI_ASSOC);



    $sql = "SELECT * FROM queens ORDER BY Average DESC";
    $resultats = mysqli_query($conn, $sql);
    $queens = mysqli_fetch_all($resultats, MYSQLI_ASSOC);

?>

    <div class="results">
        <h2 class="titre_de_page">Résultats des élections</h2>
        <div class="board">
            <div class="king">
                <h3>Le roi</h3>
                <?php $rank=1; foreach($kings as $king){ ?>
                    <span class="candidat">
                        <div><?php echo $rank.' - '.$king['Name']; ?></div>
                        <span><?php echo round(($king['Average']/$electorNumber)*100) .'%'; ?></span>
                        <div class="fillUp">
                            <div class="filled" style="width:<?php echo ($king['Average']/$electorNumber)*100 .'%'; ?> "></div>
                        </div>
                    </span>
                <?php $rank++; } ?>
            </div>

            <div class="king">
                <h3>La reine</h3>
                <?php $rank=1; foreach($queens as $queen){ ?>
                    <span class="candidat">
                        <div><?php echo $rank.' - '.$queen['Name']; ?></div>
                        <span><?php echo round(($queen['Average']/$electorNumber)*100 ).'%'; ?></span>
                        <div class="fillUp">
                            <div class="filled" style="width: <?php echo ($queen['Average']/$electorNumber)*100 .'%'; ?>"></div>
                        </div>
                    </span>
                <?php $rank++; } ?>
            </div>
        </div>
    </div>
    <br>
    <div class="box">
        <a href="Index.php">Retourner à l'Acceuil</a>
    </div>
    <br>
<?php
require('Components/footer.php');
?>