<?php
    require('./init.php');

    if(isset($_POST['name']) && $_POST['name'] && isset($_POST['email']) && $_POST['email'] && isset($_POST['pass']) && $_POST['pass'] && isset($_POST['cpass']) && $_POST['cpass'] && isset($_POST['age']) && $_POST['age'] && isset($_POST['gender']) && $_POST['gender']) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $plan_id = $_POST['plan'];
        $plan_date = time();
        if($pass == $cpass) {

            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                echo 'user';
            } else {
                $sql = "INSERT INTO `user`(`email`, `password`,`age`, `gender`, `name`, `plan_id`, `plan_date`) VALUES ('$email','$pass', '$age', '$gender', '$name', '$plan_id', '$plan_date')";
                $result = $conn->query($sql);


                if(!$result) {
                    echo 'error';
                    $_SESSION['new_user'] = false;
                } else {
                    $_SESSION['new_user'] = true;
                    echo 'success';
                }
            }
            
        } else {
            echo 'pass';
        }

    } else {
        echo 'fill';
    }


?>