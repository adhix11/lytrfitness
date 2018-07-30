<?php

    require('./init.php');
    
    $keyword= $_POST['keyword'];
    

                                $sql = "SELECT * FROM blog WHERE tags LIKE '%$keyword%' ORDER BY id DESC";

                                $result = $conn->query($sql);
                                
                                    if ($result->num_rows > 0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        { 
                                            echo '<div class="n-listing wow animated fadeInUp" data-wow-delay="0.5s">
                            
                                            '.$row['content'].'
                                            </div>';  
                                        } 
                                    }


?>
