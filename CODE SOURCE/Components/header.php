<?php
error_reporting(0);
require('functions.php');
init_php_session();

// connect to a database
$conn = mysqli_connect('localhost' , 'id19287498_ubuntu2k22' , 'swlnWDW1S${+]|Gp', 'id19287498_ubuntu');

$vote='login.php';

if(isset($_SESSION['connected']) && $_SESSION['connected'] == 1 ){
    $vote='Vote.php';
} 
             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="Images/logoUbuntu.png" type="image/x-icon">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="Styles/style-tmp.css">
    <link rel="stylesheet" href="Styles/header_style.css">
    
</head>
<body>

    <header class="header">
        <div class="identity title">
            <img src="Images/logoUbuntu.png" alt="logo du bal Ubuntu" class="logo">
            <h1 class="title">UBUNTU 2K22</h1>
        </div>
        <nav>
            <ul class="menu title">
                <li><a href="Index.php">Acceuil</a></li>
                <li><a href="Candidates.php">Candidats</a></li>
                <li><a href="<?php if(!isset($_SESSION['connected'])){   ?>login.php<?php } else{if($_SESSION['elections'] ==1){echo 'Error.php';} else{echo 'Vote.php';} ?><?php } ?>">Vote</a></li>
                <li><a target="_blank" href="https://www.semebeach.cm/">About Us</a></li>
            </ul>
        </nav>
        <span class="menuItems">
            <i onclick="togglemenu()" class="fa-solid fa-bars"></i>
        </span>
    </header>
