
<?php
include('./init.php');

function dateDiff($start, $end) {

    // $start_ts = strtotime($start);
    
    // $end_ts = strtotime($end);
    
    $diff = $end - $start;
    
    return round($diff / 86400);
    
}


function get_today_day_number() {
    $now = time();
    global $conn;
    $user_id = $_SESSION['user_id'];
    $plan_id = $_SESSION['plan_id'];

    $sql = "SELECT * FROM user WHERE id = '$user_id' LIMIT 1";

    $result = $conn->query($sql);
    
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            { 
                $start = $row['plan_date'];
            }

        }

    $diff = dateDiff($start, $now);
    return $diff;

}


function get_today_worklist() {



    $now = time();
    global $conn;
    $user_id = $_SESSION['user_id'];
    $plan_id = $_SESSION['plan_id'];

    $day = get_today_day_number();

    $sql = "SELECT w.id FROM workout as w LEFT JOIN files as f ON w.video_link = f.title WHERE w.plan_id = '6' AND w.day_count = '1' ORDER BY w.id ASC";
    $result = $conn->query($sql);
    $i = 1;
    $num = $result->num_rows;

    if ($result->num_rows > 0)
    {
        
        while($row = $result->fetch_assoc())
        { 
            
                echo '
                <div class="modal fade" id="workout_modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="workout_modal_'.$row['id'].'">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="worklist-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">1. Boxing <span>24 REPS</span> </h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="embed-responsive embed-responsive-16by9">
                          <iframe src="https://www.youtube.com/embed/kwkXyHjgoDM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="workout_modal_content">
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum fuga quam, voluptate deserunt voluptatum autem expedita perspiciatis</p><br><br>
                            
                          <!-- <div class="d_flex">
                              <i class="material-icons">av_timer</i>
                            
                              <h1></h1>
                          </div> -->
                            
                          <div class="stopwatch" data-autostart="false">
                            <div class="time">
                                <span class="hours"></span> : 
                                <span class="minutes"></span> : 
                                <span class="seconds"></span>
                            </div>
                            <div class="controls element-btn">
                                <!-- Some configurability -->
                                <button class="toggle element-fill-btn green" data-pausetext="Pause" data-resumetext="Resume">Start</button>
                                <button class="reset element-fill-btn">Reset</button>
                            </div>
                        </div>
                          
                            
                            
                      </div>
                  </div>
    
              </div>
    
                    
          </div>
          <div class="modal-footer">
              <div class="element-btn">
                  <button type="button" class="reset pull-left element-fill-btn">Back</button> 
                      <button data-toggle="modal" data-target="#weekModal" type="button" class="element-fill-btn">
                        <span>2. Commando 15 Reps <i class="material-icons">play_arrow</i></span>
                      </button>
              </div>
          </div>
          
          </div>
          </div>
      </div>
      
      ';

           
           
        }
    
    


}
}


