<?php



    include('./init.php');

    $sql = "SELECT * FROM files ORDER BY title ASC";

        $result = $conn->query($sql);
        $response = array();
        $res = array();
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                            
                    $response['id'] = $row['id'];
                    $response['title'] = $row['title'];

                    array_push($res, $response);
                
                }

                echo json_encode($res);

            } else {
                echo '<p></p>';
            }