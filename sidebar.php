<?php @session_start();
       if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
        $admin = true;
    } else {
       $admin = false;
    }



?>
<nav class="sidebar">
        <ul>
            <li class="hamburger">
              
                <i class="material-icons">menu</i>
             
            </li>
            <?php if($admin == true) : ?>
                <li class="active"><a href="admin_dashboard"> Challenges </a></li>
            <?php endif; ?>

            <?php if($admin == false) : ?>
                <li class="active"><a href="dashboard"> Dashboard </a> </li>
            <?php endif; ?>

            <?php if($admin == true) : ?>
              
                <li><a href="editor">Nutrition </a></li>
                <li><a href="reports"> Reports </a></li>
                <li><a href="#">Transactions </a></li>
            <?php endif; ?>
            <?php if($admin == false) : ?>
            <li><a href="events"> Calendar </a></li>
            <?php endif; ?>
            <!-- <li><i class="material-icons">settings</i></li> -->
            <li><a href="class/logout_process"> Logout </a></li>
           
        </ul>
    </nav>