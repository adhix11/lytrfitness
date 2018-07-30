<?php 
    
    include('class/init.php'); 

    
    function get_no_of_days($id = false) {
        global $conn;
        $id = $_SESSION['plan_id'];

        $sql = "SELECT * FROM plan WHERE id = '$id' LIMIT 1";

        $result = $conn->query($sql);
        
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { 
                    $days = $row['expiry'];
                }

            }
        return $days; 
    }
    function get_challenge_name(){
        global $conn;
        $id = $_SESSION['plan_id'];

        $sql = "SELECT * FROM plan WHERE id = '$id' LIMIT 1";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            { 
                $plan_name = $row['plan_name'];
            }

        }
        

        return $plan_name; 
    }

    function get_current_week_date(){
        $now = time();
        global $conn;
        $user_id = $_SESSION['user_id'];
        
        $sql = "SELECT * FROM user WHERE id = '$user_id' LIMIT 1";

        $result = $conn->query($sql);
        
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { 
                    $start = $row['plan_date'];
                }

            }
        
        $start_date = get_week_start_date($start, $now);
        $end_date = get_week_end_date($start, $now);

        return $start_date." to ".$end_date;
        


    }



    


    function dateDiff($start, $end) {

        // $start_ts = strtotime($start);
        
        // $end_ts = strtotime($end);
        
        $diff = $end - $start;
        
        return round($diff / 86400);
        
    }

    function get_loop_week_days() {
        $now = time();
        global $conn;
        $user_id = $_SESSION['user_id'];
        
        $sql = "SELECT * FROM user WHERE id = '$user_id' LIMIT 1";

        $result = $conn->query($sql);
        
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { 
                    $start = $row['plan_date'];
                }

            }
        
        $start_date = get_week_start_date($start, $now);
        $end_date = get_week_end_date($start, $now);
        
        $start = strtotime($start_date);
        $end = strtotime($end_date);        
        $currentdate = $start;
        $temp_days = "";
        $current_date_now = date('d M Y', $now);
        $current_weekday = date('D', strtotime($current_date_now));
        // echo $current_date_now;
                                                                        
        while($currentdate <= $end)
        {
            $cur_date = date('d M Y', $currentdate);
            
            
            $nameOfDay = date('D', strtotime($cur_date));
            $nameWithDate = date('d D', strtotime($cur_date));
            if($nameOfDay == $current_weekday) {
                $temp_days .=  '<button class="button is-checked today" data-filter=".'.$nameOfDay.'"><span>'.$nameWithDate.'</span></button>';
            
            } else {
                $temp_days .=  '<button class="button" data-filter=".'.$nameOfDay.'"><span>'.$nameWithDate.'</span></button>';
            
            }
            
            $currentdate = strtotime('+1 days', $currentdate);
            
            //do what you want here                       
        }

        return $temp_days;

        
    } 

    function get_worklist() {
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
        
        $start_day = get_week_start_day($start, $now);
        $end_day = get_week_end_day($start, $now);

        
        $start_date = get_week_start_date($start, $now);
        $end_date = get_week_end_date($start, $now);
        
        $start = strtotime($start_date);
        $end = strtotime($end_date);        
        $currentdate = $start;
        $temp_days = "";
        $current_date_now = date('d M Y', $now);
        $current_weekday = date('D', strtotime($current_date_now));
        // echo $current_date_now;
        $weekday_array = array();
        $temp_start_day = $start_day;
        while($currentdate <= $end)
        {
            $cur_date = date('d M Y', $currentdate);
            
            
            $nameOfDay = date('D', strtotime($cur_date));

            $weekday_array[$temp_start_day] = $nameOfDay;
            
            $currentdate = strtotime('+1 days', $currentdate);
            
            //do what you want here    
            $temp_start_day++;                   
        }

        $today_weekday = get_today_weekday();

        $sql = "SELECT w.id, w.day_count, f.type, f.name, f.description, f.title, f.description, f.count, f.sets, f.calories FROM workout as w INNER JOIN plan as p ON w.plan_id = p.id LEFT JOIN files as f ON w.video_link = f.title WHERE (w.day_count >= ".$start_day." AND w.day_count <=".$end_day.") AND w.plan_id = ".$plan_id." ORDER BY W.id ASC;";
        // echo $sql;
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { 
                    $day_count = $row['day_count'];
                    $weekday = $weekday_array[$day_count];
                    $workout_button = "";

                    if($today_weekday == $weekday) {
                       $workout_button = '<div class="element-btn"><button type="button" data-toggle="modal" data-target="#workout_modal_'.$row['id'].'" class="element-fill-btn">Workout Now</button></div>';
                    } else {
                        $workout_button = "";
                    }

                    echo '<div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition '.$weekday.'">
                    <div class="element">
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
                        <div class="element-content">

                            
                           
                            
                            <h4> '.$row['title'].'</h4>
                            <div class="row">
    
                            <div class="col-sm-4">
                                <p>SET</p>
                                <p>'.$row['count'].'</p>
                            </div>
                        <div class="col-sm-4"><p>REPS</p>
                                <p>'.$row['sets'].'</p>
                            </div>
                        <div class="col-sm-4"><p>CAL</p>
                                <p>'.$row['calories'].'</p>
                            </div>
                        </div>
                                        
                            '.$workout_button.'
                        </div>
                    </div>
                </div>';
                }

            }

        // print_r($weekday_array);

    }

    function get_week_num($start, $current) {
        
        $diff = dateDiff($start, $current);
        $diff = $diff + 1;
        return ceil($diff/7);
    }

    function get_week_start_date($start, $current){
        $week_num = get_week_num($start, $current);
        
        $week_num -= 1;
        $num_of_days = ($week_num * 7);
        
        $format = "+".$num_of_days."days";
        $currentdate = strtotime($format, $start);
        $cur_date = date('d M', $currentdate);
        return $cur_date;

    }

    function get_week_end_date($start, $current) {
        $week_num = get_week_num($start, $current);
        $week_num -= 1;
        $num_of_days = ($week_num * 7);
        
        $num_of_days += 6;

        $format = "+".$num_of_days."days";
        $currentdate = strtotime($format, $start);
        $cur_date = date('d M', $currentdate);
        return $cur_date;
    }

    function get_week_start_day($start, $current){

        $week_num = get_week_num($start, $current);
        $week_num -= 1;
        $num_of_days = ($week_num * 7) + 1;
        
        
        return $num_of_days;

    }

    
    function get_week_end_day($start, $current) {
        $week_num = get_week_num($start, $current);
        $week_num -= 1;
        $num_of_days = ($week_num * 7);
        
        $num_of_days += 7;

        return $num_of_days;

       
    }


    function get_today_weekday(){
        $now = time();
        $current_date_now = date('d M Y', $now);
        $current_weekday = date('D', strtotime($current_date_now));
        return $current_weekday;
    }

    function get_weekly_calender() {
        $now = time();
        global $conn;
        $user_id = $_SESSION['user_id'];
        $plan_id = $_SESSION['plan_id'];

        $sql = "SELECT * FROM workout WHERE plan_id = '$plan_id' ORDER BY day_count DESC LIMIT 1";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            { 
                $day_count = $row['day_count'];
            }
        }

        $sql = "SELECT * FROM user WHERE id = '$user_id'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            { 
                $plan_date = $row['plan_date'];
            }
        }



        $total_weeks = ceil($day_count/7);

        $cur_date = $plan_date;


        $days_loop_count = 1;

        for($i=1;$i<=$total_weeks;$i++) {

            $start_date = date('d M', $cur_date);
            $start_date_y = date('d M Y', $cur_date);
            
            $end = strtotime('+6days', $cur_date);

            $end_date = date('d M', $end);
            $end_date_y = date('d M Y', $end);

            echo  '<div class="item">
                    <!--<div class="skewpink"></div>-->
                    <div class="date text-center">
                        <h4 class="week-text">'.$i.' WEEK</h4>
                        <h4><span>'.$start_date.' to '.$end_date.'</span></h4>  
                            
                    </div>
                    <div class="table-contents">';

                    
                            $s = strtotime($start_date);
                            $e = strtotime($end_date);        
                            $currentdate = $s;

                            while($currentdate <= $e)
                            {

                                $c = date('d D', $currentdate);
                                
                                echo '  <div class="table-row">
                                            <span class="day">'.$c.'</span>';

                                $query = "SELECT * FROM workout WHERE plan_id = '$plan_id' AND day_count='$days_loop_count'";
                                
                                $cc = $conn->query($query);
                                
                                if ($cc->num_rows > 0)
                                {
                                   
                                    while($r = $cc->fetch_assoc())
                                    { 
                                        echo '<span class="task-chip green-chip"><i class="material-icons">play_circle_outline</i><span class="task-title">'.$r['title'].'</span></span>';
                                    }
                                }            
                                            
                                echo  '</div>';

                                $nameOfDay = date('D', strtotime($c));
                                
                                
                                $currentdate = strtotime('+1 days', $currentdate);
                                $days_loop_count++;
                                //do what you want here                       
                            }

                        
                        
                    echo '
                    </div>
                
                </div>';

                $end_date = strtotime($end_date);
                $cur_date = strtotime('+1days', $end_date);
        }

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
       
        return ($diff + 1);

    }
    
function get_today_worklist() {



    $now = time();
    global $conn;
    $user_id = $_SESSION['user_id'];
    $plan_id = $_SESSION['plan_id'];

    $day = get_today_day_number();

    // echo $day;

    $sql = "SELECT w.id FROM workout as w LEFT JOIN files as f ON w.video_link = f.title WHERE w.plan_id = '$plan_id' AND w.day_count = '$day' ORDER BY w.id ASC";
    $result = $conn->query($sql);
    
    $id_array = array();

    if ($result->num_rows > 0)
    {
        
        while($row = $result->fetch_assoc())
        { 
            $id = $row['id'];
            array_push($id_array, $id);
        } 

    }

   

    $sql = "SELECT w.id, f.title, f.description, f.sets, f.count, f.calories, f.type, f.name FROM workout as w LEFT JOIN files as f ON w.video_link = f.title WHERE w.plan_id = '$plan_id' AND w.day_count = '$day' ORDER BY w.id ASC";
    $result = $conn->query($sql);

    $i = 1;
    $num = $result->num_rows;

    if ($result->num_rows > 0)
    {
        
        while($row = $result->fetch_assoc())
        { 
               


                if($i == $num) {

                    $prev = prev($id_array);
                    echo '
                    <div class="modal workout_modal fade" id="workout_modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="workout_modal_'.$row['id'].'">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="workout_modal"> '.$row['title'].' </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-16by9">';

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
                                  
                            echo '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="workout_modal_content">
                                        <h1>Workout Description</h1>
                                        <p>'.$row['description'].'</p>
                                        <div class="row">
    
                            <div class="col-sm-4">
                                <p>SET</p>
                                <p>'.$row['count'].'</p>
                            </div>
                        <div class="col-sm-4"><p>REPS</p>
                                <p>'.$row['sets'].'</p>
                            </div>
                        <div class="col-sm-4"><p>CAL</p>
                                <p>'.$row['calories'].'</p>
                            </div>
                        </div>
                                        <!-- <div class="d_flex">
                                                <i class="material-icons">av_timer</i>
                                        
                                                <h1><time>00:10:00</time></h1>
                                        </div> -->
                                        
                                        <div class="stopwatch" data-autostart="false">
                                            <div class="time" id="time_'.$row['id'].'">
                                                <span class="hours"></span> : 
                                                <span class="minutes"></span> : 
                                                <span class="seconds"></span>
                                            </div>
                                            <div class="controls element-btn">
                                                <!-- Some configurability -->
                                                <button class="toggle element-fill-btn green" data-pausetext="Pause" data-id="'.$row['id'].'" data-resumetext="Resume">Start</button>
                                                <button class="reset element-fill-btn">Reset</button>
                                            </div>
                                        </div>
                                                
                                        </div>
                                    </div>
                    
                                </div>
                    
                                    
                            </div>
                            <div class="modal-footer">
                                <div class="element-btn">
                                    <button type="button" data-toggle="modal" data-target="#workout_modal_'.$prev.'" data-dismiss="modal" class="cancel-timer pull-left element-fill-btn">Back</button> 
                                    <button type="button" data-id="'.$plan_id.'" data-dismiss="modal" aria-label="Close" class="cancel-timer finish element-fill-btn">
                                        <span> Finish </span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                        ';

                   
                } else if($i == 1) {
                    $next = next($id_array);
                    echo '
                    <div class="modal workout_modal fade" id="workout_modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="workout_modal_'.$row['id'].'">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="workout_modal"> '.$row['title'].' </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">';

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
                                      
                                echo '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="workout_modal_content">
                                        <h1>Workout Description</h1>
                                            <p>'.$row['description'].'</p>
                                            <div class="row">
    
                            <div class="col-sm-4">
                                <p>SET</p>
                                <p>'.$row['count'].'</p>
                            </div>
                        <div class="col-sm-4"><p>REPS</p>
                                <p>'.$row['sets'].'</p>
                            </div>
                        <div class="col-sm-4"><p>CAL</p>
                                <p>'.$row['calories'].'</p>
                            </div>
                        </div>
                                            <!-- <div class="d_flex">
                                                    <i class="material-icons">av_timer</i>
                                            
                                                    <h1><time>00:10:00</time></h1>
                                            </div> -->
                                            
                                            
                                            <div class="stopwatch" data-autostart="false">
                                                <div class="time" id="time_'.$row['id'].'">
                                                    <span class="hours"></span> : 
                                                    <span class="minutes"></span> : 
                                                    <span class="seconds"></span>
                                                </div>
                                                <div class="controls element-btn">
                                                    <!-- Some configurability -->
                                                    <button class="toggle element-fill-btn green" data-pausetext="Pause" data-id="'.$row['id'].'" data-resumetext="Resume">Start</button>
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
                                    <button type="button" data-toggle="modal" data-target="#workout_modal_'.$next.'"  data-dismiss="modal" class="cancel-timer element-fill-btn">
                                        <span > Next <i class="material-icons">play_arrow</i></span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                        ';
                } else {
                    $next = next($id_array);
                    $prev = prev($id_array);
                    echo '
                    <div class="modal workout_modal fade" id="workout_modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="workout_modal_'.$row['id'].'">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="workout_modal"> '.$row['title'].' </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-16by9">';

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
                                  
                            echo '</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="workout_modal_content">
                                        <h1>Workout Description</h1>
                                        <p>'.$row['description'].'</p>
                                        <div class="row">
    
                            <div class="col-sm-4">
                                <p>SET</p>
                                <p>'.$row['count'].'</p>
                            </div>
                        <div class="col-sm-4"><p>REPS</p>
                                <p>'.$row['sets'].'</p>
                            </div>
                        <div class="col-sm-4"><p>CAL</p>
                                <p>'.$row['calories'].'</p>
                            </div>
                        </div>
                                       
                                
                                            <!-- <div class="d_flex">
                                                    <i class="material-icons">av_timer</i>
                                            
                                                    <h1><time>00:10:00</time></h1>
                                            </div> -->
                                            
                                            <div class="stopwatch" data-autostart="false">
                                                <div class="time" id="time_'.$row['id'].'">
                                                    <span class="hours"></span> : 
                                                    <span class="minutes"></span> : 
                                                    <span class="seconds"></span>
                                                </div>
                                                <div class="controls element-btn">
                                                    <!-- Some configurability -->
                                                    <button class="toggle element-fill-btn green" data-pausetext="Pause" data-id="'.$row['id'].'" data-resumetext="Resume">Start</button>
                                                    <button class="reset element-fill-btn">Reset</button>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                    
                                </div>
                    
                                    
                            </div>
                            <div class="modal-footer">
                                <div class="element-btn">
                                    <button data-toggle="modal" data-target="#workout_modal_'.$prev.'" data-dismiss="modal" type="button" class="cancel-timer pull-left element-fill-btn">
                                        <span> Prev <i class="material-icons">play_arrow</i></span>
                                    </button> 
                                    <button data-toggle="modal" data-target="#workout_modal_'.$next.'" data-dismiss="modal" type="button" class="cancel-timer element-fill-btn">
                                        <span> Next <i class="material-icons">play_arrow</i></span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                        ';

                    
                }
            
                $i++;

           
           
        }
    
    


}
}


function get_no_of_users(){
    
    global $conn;
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    return $result->num_rows;

}

function get_no_of_plan(){
    
    global $conn;
    $sql = "SELECT * FROM plan";
    $result = $conn->query($sql);
    return $result->num_rows;

}