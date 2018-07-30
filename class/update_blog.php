<?php




require('./init.php');

    if(isset($_POST['id']) && $_POST['id'] && isset($_POST['title']) && $_POST['title'] && isset($_POST['tags']) && $_POST['tags'] && isset($_POST['main-content']) && $_POST['main-content'] && isset($_POST['flag']) && $_POST['flag']) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $tags = $_POST['tags'];
        $content = $_POST['main-content'];
        $flag = $_POST['flag'];
       
        
        $sql = "UPDATE blog SET title = '$title', tags = '$tags', content = '$content', flag = '$flag' WHERE id = '$id'";
        // echo $sql;
        
        $result = $conn->query($sql);

      

           
    }
