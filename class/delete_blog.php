<?php

    require('./init.php');
    
    $id= $_POST['id'];
    $sql = "DELETE FROM blog WHERE id = $id";

    $result = $conn->query($sql);


?>
