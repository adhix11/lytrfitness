<?php
    @session_start();
    
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == false && isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == true) {

    } else {
        header('Location: class/logout_process.php');
    }



?>