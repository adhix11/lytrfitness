<?php 
    include('./header.php'); 
    @session_start();
    include('class/init.php');
?>

<body>

    <section class="bg-cover">
        <div class="login-form">

       
            <div class="row">
                    <div class="col-md-12">
                        <div class="logo-holder">
                           <a href="index.html"> <img src="images/logo.png" /> </a>
                        </div>
                        <div class="titleText text-center">
                            
                            <h2 class="sectionTitle">LOGIN <span>NOW</span></h2>
                        </div>
                    </div>
                    <form id="login-form" method="POST">
                        <div class="col-md-12">
                            <?php 
                                if(isset($_SESSION['new_user']) && $_SESSION['new_user'] == true) {
                                    echo '<p class="welcome-text">Thanks for Signing Up. Please Login to Continue</p>';
                                    $_SESSION['new_user'] = false;

                                } else {

                                }
                            ?>
                           
                        </div>
                        <div class="col-md-12">
                            <div class="form-Box">
                                <input type="text" name="email" placeholder="Email" class="b_effect" />
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-Box">
                                <input type="password" name="password" placeholder="Password" class="b_effect" />
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-Box text-center">
                                <button id="login-button" class="fill-btn" >Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <a href="#" class="alt-link" data-toggle="modal" data-target="#login-modal">Not a Member? Click here to Register</a>
                    </div>
             
                    
                </div>
        </div>
    </section>

    <!-- modal -->

        <!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal">
        <div class="modal-dialog  wow animated swing" role="document">
          <div class="modal-content">
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titleText text-center">
                            <h6 class="titleTop">Join our Team</h6>
                            <h2 class="sectionTitle">REGISTER <span>NOW</span></h2>
                        </div>
                    </div>
                    <form id="register-form">
                        <div class="col-md-12">
                            <div class="form-Box">
                                <input type="text" name="name" placeholder="Name" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-Box">
                                <input type="email" name="email" placeholder="Email" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-Box">
                                <input type="password" name="pass" placeholder="Password" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-Box">
                                <input type="password" name="cpass" placeholder="Confirm Password" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-Box">
                                <input type="number" placeholder="Age" name="age" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-Box">
                                <select class="b_effect" name="gender" required>
                                    <option disabled>Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-Box">
                                <select class="b_effect" name="plan" required>
                                    <option disabled>Choose Challenges</option>
                                    <?php
                                        $sql = "SELECT* FROM plan ORDER BY id ASC";

                                        $result = $conn->query($sql);
                                         
                                        if ($result->num_rows > 0)
                                        {
                                            while($row = $result->fetch_assoc())
                                            { 
                                                echo '<option value="'.$row['id'].'">'.$row['plan_name'].'</option>';
                                            }
                                        }

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-Box text-center">
                                <input type="submit" id="register-button" value="Register" class="fill-btn" />
                            </div>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <!-- <a href="#" class="alt-link">Already a Member? Click here to Login</a> -->
                    </div>
             
                    
                </div>
                
            </div>
            
          </div>
        </div>
      </div>

<?php include('./footer.php'); ?>


<script>

    $('#register-button').on('click', function(e){
        e.preventDefault();
        var data = $('#register-form').serialize();
        $.ajax('class/register_process', {
                type: 'POST',  // http method
                data: data,  // data to submit
                success: function (data, status, xhr) {
                    
                    switch(data) {
                        case 'fill': $.toaster({ message : 'Please Fill in All Details', priority: 'danger' }); break;
                        case 'user': $.toaster({ message : 'User already exists. Please login to continue', priority: 'danger' }); break;
                        case 'error': $.toaster({ message : 'Please Try Again', title : 'System Failure', priority: 'danger' }); break;
                        case 'pass': $.toaster({ message : 'Password did not match', priority: 'danger' }); break;
                        
                        case 'success': window.location.href='login'; break;
                    }
                    
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    $.toaster({ message : 'Please Try Again', title : 'System Failure', priority: 'danger' });
                    }
            });
    });

    $('#login-button').on('click', function(e){
        // alert('click');
        e.preventDefault();
        var data = $('#login-form').serialize();
        $.ajax('class/login_process', {
                type: 'POST',  // http method
                data: data,  // data to submit
                success: function (data, status, xhr) {
                    switch(data) {
                        case 'fill': $.toaster({ message : 'Please Fill in All Details', priority: 'danger' }); break;
                        
                        case 'error': $.toaster({ message : 'Please Try Again', title : 'Invalid Credentials', priority: 'danger' }); break;
                        
                        case 'success': window.location.href='dashboard'; break;
                        
                        case 'admin': window.location.href='admin_dashboard'; break;
                    }
                    
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    $.toaster({ message : 'Please Try Again', title : 'System Failure', priority: 'danger' });
                    }
            });
    });


</script>