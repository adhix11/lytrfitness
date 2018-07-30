<?php
    @session_start();
    
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {

    } else {
        header('Location: class/logout_process.php');
    }



?>