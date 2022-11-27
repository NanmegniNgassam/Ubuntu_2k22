<?php
error_reporting(0);
require('functions.php');
init_php_session();

// connect to a database
$conn = mysqli_connect('localhost' , 'id19287498_ubuntu2k22' , 'swlnWDW1S${+]|Gp', 'id19287498_ubuntu');


// fetching the information from the form
    if(isset($_POST['submit'])){
        $userId = $_SERVER['REMOTE_ADDR'];
        
        $sql = "SELECT IdDevice FROM electeurs";
        $results = mysqli_query($conn, $sql);
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

        $idCheck = true;

        foreach($users as $user){
            if($user['IdDevice'] == $userId){
                $idCheck = false;
                break;
            }
        }

        init_php_session();

        if($idCheck){
            if(
                (isset($_POST['userEmail']) && !empty($_POST['userEmail'])) &&  
                (isset($_POST['userName']) && !empty($_POST['userName']))
            ){
                $sql = "SELECT Email FROM electeurs";
                $results = mysqli_query($conn, $sql);
                $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

                $emailCheck = true;
                $userEmail = $_POST['userEmail'];
                $userName = $_POST['userName'];
                
                foreach($users as $user){
                    if($user['Email'] == $userEmail){
                        $emailCheck = false;
                        break;
                    }
                }

                if($emailCheck){
                    $sql = "INSERT INTO electeurs(Email,Name,IdDevice,Connected,Elections) VALUES ('" .$userEmail. "','".$userName."', '".$userId."',1,0)";

                    mysqli_query($conn, $sql);
                    
                    $sql = "SELECT * FROM electeurs WHERE IdDevice='" .$userId. "'";
                    $results = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_all($results, MYSQLI_ASSOC);

                    $_SESSION['Email'] = $user[0]['Email'];
                    $_SESSION['userName'] = $user[0]['Name'];
                    $_SESSION['IdDevice'] = $user[0]['IdDevice'];
                    $_SESSION['connected'] = $user[0]['Connected'];
                    $_SESSION['elections'] = $user[0]['Elections'];

                    header('Location:../Index.php');
                }
                else{
                    header('location:../Error.php');
                }
            }

            else{
                header('location:../login.php');
            }
            
        }

        else{
            init_php_session();
            $sql = "UPDATE electeurs SET Connected = 1 WHERE IdDevice='" .$userId. "'";
            mysqli_query($conn, $sql);

            $sql = "SELECT * FROM electeurs WHERE IdDevice='" .$userId. "'";
            $results = mysqli_query($conn, $sql);
            $user = mysqli_fetch_all($results, MYSQLI_ASSOC);

            $_SESSION['Email'] = $user[0]['Email'];
            $_SESSION['userName'] = $user[0]['Name'];
            $_SESSION['IdDevice'] = $user[0]['IdDevice'];
            $_SESSION['connected'] = $user[0]['Connected'];
            $_SESSION['elections'] = $user[0]['Elections'];

            header('Location:https://ubuntu-2k22.000webhostapp.com/ubuntu/Index.php');
        }
        
    }    

?>