<?php


require('./init.php');

    if(isset($_POST['title']) && $_POST['title'] && isset($_POST['tags']) && $_POST['tags'] && isset($_POST['main-content']) && $_POST['main-content'] && isset($_POST['flag']) && $_POST['flag']) {
        
        $title = $_POST['title'];
        $tags = $_POST['tags'];
        $content = $_POST['main-content'];
        $flag = $_POST['flag'];
       
        
        $sql = "INSERT INTO `blog`(`title`, `tags`,`content`, `flag`) VALUES ('$title', '$tags', '$content', '$flag')";
        $result = $conn->query($sql);

        header('Location: ../editor.php');

           
    }
