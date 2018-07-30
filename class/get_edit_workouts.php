<?php 

    require('./init.php');
    $challenge_id = $_POST['id'];

    $sql = "SELECT * FROM plan WHERE id = '$challenge_id'";
    $result = $conn->query($sql);
    $days_count = 0;

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
                       
           $days_count = $row['expiry'];
           
        }


    } 


?>



<div id="grid-box">
    <div class="row" id="workout-list">
        
          

    

    </div>
    
</div>




<?php




$sql = "SELECT * FROM files ORDER BY title ASC";

    $result = $conn->query($sql);
    $response = array();
    $res = array();
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                        
                
                $response['title'] = $row['title'];

                array_push($res, $response);
            
            }

            $json =  json_encode($res);

        } else {
            echo '<p></p>';
        } 
        
?>
<script>
$(document).ready(function(){
    get_worklist();
    
});


function get_worklist() {
    $.ajax('class/get_worklist', {
            type: 'POST',  // http method
            data: {id: <?php echo $challenge_id; ?>},  // data to submit
            success: function (data, status, xhr) {
                //$('p').append('status: ' + status + ', data: ' + data);
                // alert(data);
                // alert(data);
                $('#workout-list').html(data);
                
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    // $('p').append('Error' + errorMessage);
                //    Materialize.toast('Please Try Again', 1000);
                }
        });
}   


$("#workout-form").on('submit', function(e) {
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

</script>