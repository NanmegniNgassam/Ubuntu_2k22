<?php
$title = 'Liste des candidat[e]s - Elections roi et reine Ubuntu 2k22';

require('Components/header.php');
?>

<div class="intro">
    <h2 class="titre_de_page">Candidats à l'Election</h2>
    <h3 class="sous-titre">Une soirée, Un hommage, Une élection</h3>
    <p class="normal">
        Ubuntu est le bal de fin d'etudes des étudiants de Saint Jérôme Douala. Sa raison d'être est de valoriser les nouveaux
        Ingénieurs fraichement sortis… Et comme il est de coutume, nous devons élire le plus beau couple de la soirée.
    </p>
    <div class="call">
        <a class="callToAction" href="<?php if(!isset($_SESSION['connected'])){   ?>login.php<?php } else{if($_SESSION['elections'] ==1){echo 'Error.php';} else{echo 'Vote.php';} ?><?php } ?>" >
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

<div class="candidats">
    <div class="queen">
        <p>Les DAMES</p>
        <span class="election">
            <div class="candidat">
                <img src="Images/nganso.png" alt="NGANSO, SJP1">
                <span>NGANSO</span>
                <span>SJP1</span>
            </div>
            <div class="candidat">
                <img src="Images/oceanne.png" alt="Océanne YEBCHUE, SJP2">
                <span>Océanne YEBCHUE</span>
                <span>SJP2</span>
            </div>
            <div class="candidat">
                <img src="Images/elsa.png" alt="Elsa NUADJE, SJP3-GIT">
                <span>Elsa NUADJE</span>
                <span>SJP3</span>
            </div>
            <div class="candidat">
                <img src="Images/gloria.png" alt="Gloria DIWONGUI, SJP4-GME">
                <span>Gloria DIWONGUI</span>
                <span>SJP4</span>
            </div>
            <div class="candidat">
                <img src="Images/luisa.png" alt="Luisa BESSOM, SJP5-GMI">
                <span>Luisa BESSOM</span>
                <span>SJP5</span>
            </div>
        </span>
    </div>

    <div class="king">
        <p>Les MESSIEURS</p>
        <span class="election">
           <div class="candidat">
                <img src="Images/florian.png" alt="Florian MOUKAM, SJP1">
                <span>Florian MOUKAM</span>
                <span>SJP1</span>
            </div>
            <div class="candidat">
                <img src="Images/roland.png" alt="SOUOP Roland, SJP2">
                <span>SOUOP Roland</span>
                <span>SJP2</span>
            </div> 
            <div class="candidat">
                <img src="Images/dimitri.png" alt="Dimitri EPOH, SJP3-GCI">
                <span>Dimitri EPOH</span>
                <span>SJP3</span>
            </div> 
            <div class="candidat">
                <img src="Images/steave.png" alt="Steave MANGA, SJP4-GP">
                <span>Steve MANGA</span>
                <span>SJP4</span>
            </div> 
            <div class="candidat">
                <img src="Images/harold.png" alt="Harold, SJP5-GME">
                <span>Harold</span>
                <span>SJP5</span>
            </div> 
        </span>
    </div>
    <div class="box">
    <a class="callToAction" href="<?php 
    if(!isset($_SESSION['connected'])){
        echo 'login.php'; 
    } 
    else{
        if($_SESSION['elections'] ==1){
            echo 'Error.php';
            
        } 
        else{
            echo 'Vote.php';
            
        }
    } 
    ?>" >
            <?php if(!isset($_SESSION['connected'])){ ?>
                Pass Electeur
            <?php } else{ ?>
                Aller aux urnes
            <?php } ?>
        </a>
    </div>
</div>

<?php
require('Components/footer.php');
?>