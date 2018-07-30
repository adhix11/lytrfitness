<?php

    require('./init.php');
    
    $id= $_POST['id'];
    $sql = "DELETE FROM workout WHERE id = $id";

    $result = $conn->query($sql);


?>
