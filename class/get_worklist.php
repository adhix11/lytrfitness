<?php

require('./init.php');
 
$id = $_POST['id'];
$days_count = 0;
$sql = "SELECT * FROM plan WHERE id = '$id' LIMIT 1";

$result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
                       
            // echo $row['title'];
            $days_count = $row['expiry'];
           
        }


    } else {
        // echo '<p></p>';
    }

?>
    <div class="col-md-3">
    <div class="" id="add-box">
                <div class="add-icon">
                
                        <form class="workout-form">
                            <input type="hidden" name="challenge_id"  class="b_effect" value="<?php echo $id; ?>" />
                            
                             <div class="form-Box">
                                <p><label>  <input type="text" autocomplete="off" name="video_link" placeholder="Search Video / GIF Link:" class="combobox b_effect" required> </label></p>
                            </div>
                            <div class="form-Box media-box">
                                  
                            </div>
                            <div class="form-Box">
                                <p><label> <select name="day_count" class="b_effect" required>
                                            <?php 

                                                for($i = 1; $i <= $days_count; $i++) {
                                                    echo '<option value='.$i.'>Day '.$i.'</option>';
                                                }

                                            ?>
                                    </select>


                                </label></p>
                            </div>
                           
                            <div class="form-Box text-center">
                                <input type="submit" id="create-button" value="Create" class="fill-btn" />
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>

<?php
    $sql = "SELECT w.id, w.video_link, w.day_count, w.title, w.content, f.name, f.type FROM workout as w INNER JOIN files as f ON w.video_link = f.title WHERE w.plan_id = '$id' ORDER BY w.id DESC";

$result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
                       
            // echo $row['title'];
            $days = $row['day_count'];
            echo '  <div class="col-md-3">
            <div class="" id="add-box">
                        <span data-id="'.$row['id'].'" class="delete-workout"><i class="material-icons">delete</i></span>
                        <div class="add-icon update">
                        
                                <form class="workout-form">
                                    <input type="hidden" name="mode" value="1" />
                                    <input type="hidden" name="workout_id" value="'.$row['id'].'" />
                                    <input type="hidden" name="challenge_id"  class="b_effect" value="'.$id.'" />
                                    
                                     <div class="form-Box">
                                        <p><label>  <input data-toggle="tooltip" data-placement="top" title="Video / GIF Link" type="text" autocomplete="off" name="video_link" value="'.$row['video_link'].'" placeholder="Search Video / GIF Link:" class="combobox b_effect" required> </label></p>
                                    </div>
                                    <div class="form-Box media-box">
                                    ';

                                    if (preg_match('/video/', $row['type'])) {
                                       echo '<div align="center" class="embed-responsive embed-responsive-16by9">
                                            <video controls class="embed-responsive-item">
                                                <source src="video_upload/server/php/files/'.$row['name'].'" type="'.$row['type'].'">
                                            </video>
                                        </div>';

                                    } else if(preg_match('/image/', $row['type'])) {
                                        echo '<img class="img-responsive" src="video_upload/server/php/files/'.$row['name'].'" alt="">';
                                    } else {

                                    }

                                    echo '
                                    </div>
                                    <div class="form-Box">
                                        <p><label> <select name="day_count" class="b_effect" required>';
                                                    

                                                        for($i = 1; $i <= $days_count; $i++) {

                                                            if($days == $i) {
                                                                echo '<option value='.$i.' selected>Day '.$i.'</option>';
                                                            } else {
                                                                echo '<option value='.$i.'>Day '.$i.'</option>';
                                                            }
                                                            
                                                        }

                                                   
                                       echo '
                                            </select>


                                        </label></p>
                                    </div>
                                   
                                    <div class="form-Box text-center">
                                        <input type="submit" id="create-button" value="Update" class="fill-btn" />
                                    </div>
                                </form>
                            
                        </div>
                    </div>
                </div>
';
           
        }


    } else {
        // echo '<p></p>';
    }

?>






<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(".workout-form").on('submit', function(e) {
    e.preventDefault();
    ele = $(this);
    data = ele.serialize();
    $.ajax('class/create_workout', {
            type: 'POST',  // http method
            data: data,  // data to submit
            success: function (data, status, xhr) {
                //$('p').append('status: ' + status + ', data: ' + data);
                // alert(data);
                get_worklist();
                alert("Submitted Successfully");
                
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    // $('p').append('Error' + errorMessage);
                //    Materialize.toast('Please Try Again', 1000);
                }
        });
});

 $(".combobox").typeahead({
    items: 4,
    source: function(request, response) {
        $.ajax({
            url: "class/video_list",
            dataType: "json",
          
            success: function (data) {
                response(data);
            }
        });
    },
    autoSelect: true,
    displayText: function (item) {
        return item.title;
    }
});

$(document).on('click', '.delete-workout', function(){ 
    ele = $(this);
    id = ele.data('id');
    if(confirm('Are you sure want to delete?')) {
        $.ajax('class/delete_workout', {
            type: 'POST',  // http method
            data: {id: id},  // data to submit
            success: function (data, status, xhr) {
                //$('p').append('status: ' + status + ', data: ' + data);
                // alert(data);
                
                // alert("Deleted Successfully");
                
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    // $('p').append('Error' + errorMessage);
                //    Materialize.toast('Please Try Again', 1000);
                }
        });
        ele.closest('.col-md-3').fadeOut();
    } 
    
});
</script>