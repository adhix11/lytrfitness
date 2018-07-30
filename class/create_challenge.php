<?php

 require('./init.php');
 
		if(isset($_POST['mode'])) {
			$mode = $_POST['mode'];
			// echo $mode;
			switch($mode) {
				case 0: 
					if (isset($_POST['title']) && $_POST['title'] && isset($_POST['days']) && $_POST['days']) {
						# code...
						$title = $_POST['title'];
						$days = $_POST['days'];
						$price = $_POST['price'];
					
						$sql = "INSERT INTO plan (`plan_name`, `plan_price`, `expiry`) VALUES ('$title', '$price', '$days')";
						// echo $sql;
						$result = $conn->query($sql);

						
						
					}
					break;
				case 1: 
					if (isset($_POST['title']) && $_POST['title'] && isset($_POST['days']) && $_POST['days']) {
						# code...
						$title = $_POST['title'];
						$days = $_POST['days'];
						$price = $_POST['price'];
						$id = $_POST['id'];
						

						$sql = "UPDATE plan SET plan_name = '$title' , plan_price = '$price' , expiry = '$days' WHERE id = '$id' ";
						$result = $conn->query($sql);

					}
					break;
			}

		
			
		}

		
		
		
	
	