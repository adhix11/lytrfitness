<?php




require('./init.php');

    if(isset($_POST['id']) && $_POST['id'] && isset($_POST['val']) && $_POST['val'] ) {
        $id = $_POST['id'];
        $val = $_POST['val'];
       
       
        
        $sql = "UPDATE user SET flag = '$val' WHERE id = '$id'";
        // echo $sql;
        
        $result = $conn->query($sql);

      

           
    }
