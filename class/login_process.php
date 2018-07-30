<?php

 require('./init.php');
 


		if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
			# code...
			$email = $_POST['email'];
			$password = $_POST['password'];
           
			$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND flag = 'true' LIMIT 1";
			$result = $conn->query($sql);
            
			if ($result->num_rows > 0) 
			{
			    while($row = $result->fetch_assoc()) 
			    {
			        
			    	$_SESSION['is_loggedin'] = true;
			    	$_SESSION['user_id'] = $row['id'];
					$_SESSION['email'] = $email;
					$_SESSION['plan_id'] = $row['plan_id'];
					$_SESSION['is_admin'] = false;
					$role = $row['role'];

					if($role == 'admin') {
						$_SESSION['is_admin'] = true;
						echo 'admin';
					} else {
						$_SESSION['is_admin'] = false;
						echo 'success';
					}
			    	
			    }
                
                
			   
			} else {
               
                 
                echo 'error';
				 
			}
		} else {
            echo 'fill';
        }
		
		
	
	