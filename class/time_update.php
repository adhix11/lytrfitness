<?php




require('./init.php');

    if(isset($_POST['id']) && $_POST['id'] && isset($_POST['value']) && $_POST['value']) {
        $id = $_POST['id'];
        $value = strip_tags($_POST['value']);
        
        $uid = $_SESSION['user_id'];
        $time = time();

        
        // $sql = "UPDATE blog SET title = '$title', tags = '$tags', content = '$content', flag = '$flag' WHERE id = '$id'";
        // echo $sql;
        
        // $result = $conn->query($sql);
        
        $sql = "SELECT * FROM user_session WHERE workout_id = '$id' AND user_id = '$uid'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {

            $sql = "INSERT INTO `user_session`(`created_date`, `workout_id`,`user_id`, `timer`) VALUES ('$time','$id', '$uid', '$value')";
            
        } else {

            $sql = "UPDATE user_session SET updated_date = '$time', timer = '$value' WHERE workout_id = '$id' AND user_id = '$uid'";
        }

        $result = $conn->query($sql);

        echo '<div role="tabpanel" class="tab-pane fade in active" id="home"><i class="material-icons">alarm</i>'.$value.'</div>
        <div role="tabpanel" class="tab-pane fade" id="profile"><i class="material-icons">alarm</i>'.$value.'</div>
        <div role="tabpanel" class="tab-pane fade" id="messages"><i class="material-icons">alarm</i>'.$value.'</div>';
      

           
    }
