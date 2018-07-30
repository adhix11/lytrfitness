<?php


    include('./init.php');

    $challenge_id = $_POST['challenge_id'];
    $video_link = $_POST['video_link'];
    $day_count = $_POST['day_count'];
    

    // print_r($_POST);

    if(isset($_POST['mode'])) {
        $w_id = $_POST['workout_id'];
        $sql = "UPDATE workout SET video_link = '$video_link', day_count = '$day_count' WHERE id = '$w_id'";
        // echo $sql;
        $result = $conn->query($sql);

    }

    else {
        $sql = "INSERT INTO workout (`video_link`, `plan_id`, `day_count`) VALUES ('$video_link', '$challenge_id', '$day_count')";
        // echo $sql;
        $result = $conn->query($sql);
    }

    // $sql = "SELECT * FROM files WHERE title= '$video_link' LIMIT 1";

    // $result = $conn->query($sql);

    //     if ($result->num_rows > 0)
    //     {
    //         while($row = $result->fetch_assoc())
    //         {
                        
    //             $video_link = $row['name'];
            
    //         }


    //     } else {
    //         echo '<p></p>';
    //     }

   
