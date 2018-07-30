<?php

    require('./init.php');
    
    $id= $_POST['id'];
    $sql = "DELETE FROM plan WHERE id = $id";

    $result = $conn->query($sql);


?>
