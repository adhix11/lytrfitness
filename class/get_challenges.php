<?php

require('./init.php');
 

$sql = "SELECT * FROM plan ORDER BY id DESC";

$result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
                       
            echo '<span class="chip" data-id="'.$row['id'].'">
                    <span class="title">'.$row['plan_name'].' | <i>'.$row['expiry'].' Days</i> | <strong>$'.$row['plan_price'].'</strong></span>
                    <span data-id="'.$row['id'].'" data-title="'.$row['plan_name'].'" data-price="'.$row['plan_price'].'" data-days="'.$row['expiry'].'" class="edit-challenges pointer"><i class="material-icons">edit</i></span>
                    <span data-id="'.$row['id'].'" class="delete-challenges pointer"><i class="material-icons">close</i></span>
                </span>';
           
        }


    } else {
        echo '<p></p>';
    }

?>
