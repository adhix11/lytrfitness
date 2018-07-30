<?php include('class/user_check.php'); ?>
<?php include('./header.php'); ?>

<?php include('class/functions.php'); ?>
    
<body class="bg-gray">
    <?php include('./sidebar.php'); ?>

    <section class="main-content">
        <?php include('./navigation.php'); ?>
            <section>
                <div class="content">
    <!-- <h1></h1> -->
                     
                    <div class="container-fluid">
                        <div class="progress-analytics">
                
                                <div class="row">
                                  <div class="col-sm-3 border-right">
                                      <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li role="presentation" class="active nav-item"><a href="#home" class="nav-link" aria-controls="home" role="tab" data-toggle="tab">Today</a></li>
                                            <li role="presentation" class="nav-item"><a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab">This Week</a></li>
                                            <li role="presentation" class="nav-item"><a href="#messages" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab">Past</a></li>
                                            
                                        </ul>
                                        
                                        <!-- Tab panes -->
                                        <div class="tab-content" id="time-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home"><i class="material-icons">alarm</i>00:00:00</div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile"><i class="material-icons">alarm</i> 00:00:00</div>
                                            <div role="tabpanel" class="tab-pane fade" id="messages"><i class="material-icons">alarm</i> 00:00:00</div>
                                        
                                        </div>
                                 
                                  </div>
                                  <div class="col-sm-9">
                                      <!-- progress start -->
                                    <div class="progress-box">
                                      <div class="row">
                                        <div class="col-sm-2">
                                            <div class="progress-content">
                                                <p><span>0</span> / <?php echo get_no_of_days(); ?> days</p>
                                                <p>Completed</p>
                                              </div>
                                        </div>
                                        <div class="col-sm-10 d-flex align-items-center">
                                           
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                     
                                    </div>
                                  </div>
                                </div>
                                
                
                              
                        </div>
                    </div>

                    

                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Class Section Begins -->
                                <section id="class" class="class pad-top-55 pad-bottom-115">
                                        <div class="container pr">
                                            <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                                                <div class="skewpink"></div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="titleText">
                                                            <h6 class="titleTop">GET READY TO GET FIT</h6>
                                                            <h2 class="sectionTitle"><?php echo get_challenge_name(); ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- <div class="col-md-3">
                                                        <ul class="nav nav-pills nav-stacked wow fadeInUp animated">
                                                            <li role="presentation" class="active"><h4><a href="#">Home</a></h4></li>
                                                            <li role="presentation"><h4><a href="#">Profile</a></h4></li>
                                                            <li role="presentation"><h4><a href="#">Messages</a></h4></li>
                                                        </ul>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <div class="container-fluid">
                                                    <div class="row wow fadeInUp animated" data-wow-delay="0.5s">
                                                        <div class="row d_flex">
                                                            
                                                            <div class="col-md-9">
                                                                <div class="tabs-header">
                                                                    <div id="filters" class="button-group isogrp" data-option-key="filter">
                                                                        <?php echo get_loop_week_days(); ?>
                                                                        <div class="border-move border"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                    <div class="titleText text-right">
                                                                           
                                                                           
                                                                            <a href="#" data-toggle="modal" data-target="#weekModal"><h2 class="sectionTitle" style="margin-bottom: 0px"><i id="edit-hint" class="material-icons">calendar_today</i><span>THIS</span> WEEK </h2></a>
                                                                            <h6 class="titleTop"><?php echo get_current_week_date(); ?></h6>
                                                                        </div>
                                                            </div>
                                                        </div>

                                                        
                                                        <div id="classbox" class="grid class-grids clickable clearfix">
                                                            <?php echo get_worklist(); ?>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </section>
                                    <!-- Class Section Ends -->
                            </div>
                        </div>
                    
                </section>
    </section>


    <!-- modal -->

    <!-- Modal -->
    <div class="modal fade" id="weekModal" tabindex="-1" role="dialog" aria-labelledby="weekModal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="titleText">
                    
                    <h2 class="sectionTitle">Browse <span>Week</span></h2>
                </div>
            </div>
            <div class="modal-body">
                <!-- <div class="chips-holder">
                    <a class="button chips active url" href="#zero">zero</a> 
                    <a class="button chips url" href="#three">three</a> 
                    <a class="button chips url" href="#five">five</a> 
                    <a class="button chips url" href="#seven">seven</a> 
                    <a class="button chips url" href="#ten">ten</a> 
                </div> -->
                    <div id="workout_carousel" class="owl-carousel owl-theme">
                            
                        <?php echo get_weekly_calender(); ?>
                    </div>
                         
                          
                          
            </div>
            <div class="modal-footer">
                
              <!-- <div class="element-btn"><button type="button" class="reset element-fill-btn">Reset</button> <button type="button" onclick="$('.modal').modal('hide');" class="element-fill-btn">Select</button></div> -->
            </div>
          </div>
        </div>
      </div>
    

      <!-- Modal -->
<?php echo get_today_worklist(); ?>

<?php include('./footer.php'); ?>

<script>
    $('.class-grids').isotope({
        itemSelector: '.celement',
        filter: <?php echo "'.".get_today_weekday()."'"; ?>
    });

    

$(function () {

// Never assume one widget is just used once in the page. You might
// think of adding a second one. So, we adjust accordingly.

$('.stopwatch').each(function () {

    // Cache very important elements, especially the ones used always
    var element = $(this);
    var running = element.data('autostart');
    var hoursElement = element.find('.hours');
    var minutesElement = element.find('.minutes');
    var secondsElement = element.find('.seconds');
    var millisecondsElement = element.find('.milliseconds');
    var toggleElement = element.find('.toggle');
    var resetElement = element.find('.reset');
    var pauseText = toggleElement.data('pausetext');
    var resumeText = toggleElement.data('resumetext');
    var startText = toggleElement.text();

    // And it's better to keep the state of time in variables 
    // than parsing them from the html.
    var hours, minutes, seconds, milliseconds, timer;

    function prependZero(time, length) {
        // Quick way to turn number to string is to prepend it with a string
        // Also, a quick way to turn floats to integers is to complement with 0
        time = '' + (time | 0);
        // And strings have length too. Prepend 0 until right.
        while (time.length < length) time = '0' + time;
        return time;
    }

    function setStopwatch(hours, minutes, seconds, milliseconds) {
        // Using text(). html() will construct HTML when it finds one, overhead.
        hoursElement.text(prependZero(hours, 2));
        minutesElement.text(prependZero(minutes, 2));
        secondsElement.text(prependZero(seconds, 2));
        millisecondsElement.text(prependZero(milliseconds, 3));
    }

    // Update time in stopwatch periodically - every 25ms
    function runTimer() {
        // Using ES5 Date.now() to get current timestamp            
        var startTime = Date.now();
        var prevHours = hours;
        var prevMinutes = minutes;
        var prevSeconds = seconds;
        var prevMilliseconds = milliseconds;

        timer = setInterval(function () {
            var timeElapsed = Date.now() - startTime;

            hours = (timeElapsed / 3600000) + prevHours;
            minutes = ((timeElapsed / 60000) + prevMinutes) % 60;
            seconds = ((timeElapsed / 1000) + prevSeconds) % 60;
            milliseconds = (timeElapsed + prevMilliseconds) % 1000;

            setStopwatch(hours, minutes, seconds, milliseconds);
        }, 25);
    }

    // Split out timer functions into functions.
    // Easier to read and write down responsibilities
    function run() {
        running = true;
        runTimer();
        toggleElement.text(pauseText);
    }

    function pause() {
        running = false;
        clearTimeout(timer);
        toggleElement.text(resumeText);
    }

    function reset() {
        running = false;
        pause();
        hours = minutes = seconds = milliseconds = 0;
        setStopwatch(hours, minutes, seconds, milliseconds);
        toggleElement.text(startText);
    }

    // And button handlers merely call out the responsibilities
    toggleElement.on('click', function () {
        (running) ? pause() : run();
    });

    resetElement.on('click', function () {
        reset();
    });

    // Another advantageous thing about factoring out functions is that
    // They are reusable, callable elsewhere.
    reset();
    if(running) run();
});

});

$('.toggle').on('click', function(){
	var id = $(this).data('id');
	var value = $("#time_" + id).html();

    $.ajax('class/time_update', {
                 type: 'POST',  // http method
                 data: {id: id, value: value},  // data to submit
                 success: function (data, status, xhr) {
                    $('#time-content').html(data);
                    
                 },
                 error: function (jqXhr, textStatus, errorMessage) {
                    $.toaster({ message : 'Please Try Again', title : 'System Failure', priority: 'danger' });
                     }
             });
    
});


</script>