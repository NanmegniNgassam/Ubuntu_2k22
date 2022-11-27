<?php

    function init_php_session(){
        if(session_id()){
            session_unset();
            session_destroy();
        }
        else{
        session_start();
        session_regenerate_id();
        }
    }

    function clean_php_session(){
        session_unset();
        session_destroy();
    }

    function is_logged(){
        if(isset($_SESSION['userName'])){
            return true;
        }
        else{
            return false;
        }
    }

    function is_admin(){
        if(is_logged()){
            if(isset($_SESSION['connection']) && $_SESSION['connection'] == 1){
                return true;
            }
            else{
                return false;
            }
        }
    }

?>