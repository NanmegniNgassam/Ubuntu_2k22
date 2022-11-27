<?php
$title = 'Chambre des urnes - Elections roi et reine Ubuntu 2k22';
// connect to a database
$conn = mysqli_connect('localhost' , 'id19287498_ubuntu2k22' , 'swlnWDW1S${+]|Gp', 'id19287498_ubuntu');

$sql = "SELECT * FROM electeurs WHERE IdDevice='" .$_SERVER['REMOTE_ADDR']. "'";
$results = mysqli_query($conn, $sql);
$user = mysqli_fetch_all($results, MYSQLI_ASSOC);

$_SESSION['Email'] = $user[0]['Email'];
$_SESSION['userName'] = $user[0]['Name'];
$_SESSION['IdDevice'] = $user[0]['IdDevice'];
$_SESSION['connected'] = $user[0]['Connected'];
$_SESSION['elections'] = $user[0]['Elections'];

$incompleteVote = false;
$pavel = true;




//traitement du vote
if(isset($_SESSION['elections'])){
    if($_SESSION['elections'] == 0){
        if(isset($_GET['submit'])){
            if(isset($_GET['king']) && !empty($_GET['king']) && isset($_GET['queen']) && !empty($_GET['queen'])){
                $king = $_GET['king'];
                $queen = $_GET['queen'];
                $userId = $_SESSION['IdDevice'];

                $sql = "INSERT INTO urne(King, Queen, IdDevice) VALUES ('$king', '$queen', '$userId')";
                mysqli_query($conn, $sql);


                //prevent the elector to vote another time
                $_SESSION['elections'] = 1;
                $sql = "UPDATE electeurs SET Elections = 1 WHERE IdDevice='" .$userId. "'";
                mysqli_query($conn, $sql);
                
                header('Location:https://ubuntu-2k22.000webhostapp.com/ubuntu/thanks.php');
            }
            else{
                $incompleteVote = true;
            }
        }
    }
    else{
        header('location:Error.php');
    }

}



else{
    if(!isset($_SESSION)){
        header('location:login.php');
    }

}

require('Components/header.php');



?>

<div class="intro intro2" style="height:300px">
    <h2 class="titre_de_page">Chambre des Urnes</h2>
    <?php if(isset($incompleteVote) && ($incompleteVote ==true)) { ?>
        <h3 class="sous-titre">Veuillez choisir le roi et la reine, pas uniquement un ni aucun</h3>
        
    <?php $incompleteVote = false;} else{ ?>
        <h3 class="sous-titre">Decidez de celle et celui qui gagneront ce soir</h3>
    <?php } ?>

    <div class="blackScreen"></div>
    <img src="Images/voting_Image4.png" alt="photo d'acceuil pour la circonstance" >
</div>

<div class="urnes">
    <p>Selectionner celui et celle que vous souhaitez voir gagner.</p>

    <form action="Vote.php" class="elections" method="GET">
        <span>
            <span class="king">
                <p>Election du roi</p>
                <select name="king" id="king" required>
                    <option value="NONE" disabled selected>Cliquez ici pour sélectionner votre candidat</option>
                    <option value="Florian MOUKAM">
                        <span>Florian MOUKAM, SJP1</span> 
                    </option>
                    <option value="SOUOP ROLAND">
                        <span>SOUOP ROLAND, SJP2</span> 
                    </option>
                    <option value="Dimitri EPOH">
                        <span>Dimitri EPOH, SJP3</span> 
                    </option>
                    <option value="Steave MANGA">
                        <span>Steave MANGA, SJP4</span> 
                    </option>
                    <option value="HAROLD">
                        <span>HAROLD, SJP5</span> 
                    </option>
                </select>
            </span>
            
            <span class="queen"> 
                <p>Election de la reine</p>
                <select name="queen" id="queen" required>
                    <option value="NONE" disabled selected>Cliquez ici pour sélectionner votre candidate</option>
                    <option value="NGANSO">
                        <span>NGANSO, SJP1</span> 
                    </option>
                    <option value="Oceanne YEBCHUE">
                        <span>Oceanne YEBCHUE, SJP2</span> 
                    </option>
                    <option value="Elsa NUADJE">
                        <span>Elsa NUADJE, SJP3</span> 
                    </option>
                    <option value="Gloria DIWONGUI">
                        <span>Gloria DIWONGUI, SJP4</span> 
                    </option>
                    <option value="Luisa BESSOM">
                        <span>Luisa BESSOM, SJP5</span> 
                    </option>
                </select>
            </span>
        </span>

        <input type="submit" name="submit" value="Soumettre mon Vote">
        
    </form>
</div>

<?php
require('Components/footer.php');
?>