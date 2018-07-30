<?php 


require('./init.php');
 


 if (isset($_POST['o_pass']) && $_POST['o_pass'] && isset($_POST['n_pass']) && $_POST['n_pass']) {
     # code...
     $n_pass = $_POST['n_pass'];
     $o_pass = $_POST['o_pass'];
     $uid = $_SESSION['user_id'];
    
     $sql = "SELECT * FROM user WHERE id = '$uid' AND password = '$o_pass' LIMIT 1";
     $result = $conn->query($sql);
     
     if ($result->num_rows > 0) 
     {
        echo 'true';
        $sql = "UPDATE user SET password = '$n_pass' WHERE id = '$uid'";
        $result = $conn->query($sql);
        
     } else {
         echo 'error';
     }
}