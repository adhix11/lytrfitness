<?php include('class/init.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title> Lytr Fitness </title>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/animate.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="webkit/webkit.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <link type="text/css" href="css/media.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/switcher.css" type="text/css" />
    <link rel="stylesheet" href="css/style1.css" id="colors">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body id="mainBox" class="creamBg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="150">
    <div class="main">
    <div class="head_wrap">
       

        <!-- Header Section Begins -->
        <header id="header" class="fixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu">
                        <div class="menuBar scrollbtn">
                            <nav class="navbar navbar-default">
                                <div class="skewbox"> </div>
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <div class="logo">
                                            <a class="navbar-brand" href="index"><img src="images/logo.png" alt="logo" /></a>
                                        </div>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="about">About</a></li>
                                            
                                            <li><a href="nutrition">Nutrition </a></li>
                                            
                                            <li><a href="#footer">Contact</a></li>
                                            
                                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="special-btn">Login / Register</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section Ends -->
    </div>
    <div id="site-head">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                          <div class="bg-overlay"></div>
                        <img src="images/slider_02.jpg" alt="">
                        <div class="carousel-caption">
                            <section class="banner wow animated fadeInLeft" data-wow-delay="0.5s">

                                <div class="container pr">
                                  
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="bannerText">
                                                <h1 class="slideout"> Lorem </h1>
                                                <h3>Dolor Emit <br/>amet consectetur </h3>
                                                <h1>Ipsum.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                      </div>
                      <div class="item">
                            <div class="bg-overlay"></div>
                        <img src="images/slider_03.jpg" alt="">
                        <div class="carousel-caption">
                            <section class="banner wow animated fadeInLeft" data-wow-delay="0.5s">

                                <div class="container pr">
                                   
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="bannerText">
                                                <h1 class="slideout"> Lorem </h1>
                                                <h3>Dolor Emit <br/>amet consectetur </h3>
                                                <h1>Ipsum.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                      </div>
                      <div class="item">
                            <div class="bg-overlay"></div>
                        <img src="images/slider_01.jpg" alt="...">
                        <div class="carousel-caption">
                            <section class="banner wow animated fadeInLeft" data-wow-delay="0.5s">

                                <div class="container pr">
                                   
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="bannerText">
                                                <h1 class="slideout"> Lorem </h1>
                                                <h3>Dolor Emit <br/>amet consectetur </h3>
                                                <h1>Ipsum.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Controls -->
                    <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a> -->
                  </div>
        <!-- Banner Section Begins -->
       
        <!-- Banner Section Ends -->

        <!-- Scroll Down Section Begins -->
        <section class="scrollDown scrollbtn">
            <h6> <a href="#about"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Scroll Down </a> </h6>
        </section>
        <!-- Scroll Down Section Ends -->

    </div>
      

        <!-- About Section Begins -->
        <section id="about" class="about pad-top-110 pad-bottom-120">
            <div class="container-fluid no-padding">
                <div class="row no-margin">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow animated fadeInLeft" data-wow-delay="0.5s">
                        <figure><img src="images/about_img.png" alt="image" /></figure>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right wow animated fadeInRight" data-wow-delay="0.5s">
                                <h6 class="titleTop"> WELCOME TO Lytr Fitness </h6>
                                <h2 class="sectionTitle">WHat Is <span>Lytr Fitness?</span></h2>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt inculpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section Ends -->

          

        
        <!-- Plans Section Begins -->
        <section id="plans" class="plans pad-top-115 pad-bottom-120">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">READY TO GO?</h6>
                                <h2 class="sectionTitle">CHOOSE  <span>YOUR PLAN</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing-tables pad-top-55">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox">
                            <div class="element">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> 14 DAY CHALLENGE </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $25<sub>/mo.</sub></h2>
                                        <h6> Lorem Ipsum </h6>
                                    </div>
                                </div>
                              
                                <ul class="plan-list">
                                    <li> 7 Days a Week </li>
                                    <li> Dedicated Trainer Allocated </li>
                                    <li> Diet Plan Inculuded </li>
                                    <li> Morning and Evening Batches </li>
                                </ul>
                                
                                <button type="button" onclick="window.location.href = 'about#14-day-challenge';" class="fill-btn">explore more</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox midprice">
                            <div class="element midelement">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> 6 Months Challenge </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $25<sub>/mo.</sub></h2>
                                        <h6> Lorem Ipsum </h6>
                                    </div>
                                </div>
                                <div class="midIcon"><i class="fa fa-venus fIcons"></i></div>
                                <ul class="plan-list">
                                    <li> 28 Days a Month </li>
                                    <li> Dedicated Trainer Allocated </li>
                                    <li> Diet Plan Inculuded </li>
                                    <li> Morning and Evening Batches </li>
                                </ul>
                                <button type="button" onclick="window.location.href = 'about#6-month-challenge';" class="fill-btn">explore more</button>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox">
                            <div class="element">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> 1 Year Challenge </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $25<sub>/mo.</sub></h2>
                                        <h6> Lorem Ipsum </h6>
                                    </div>
                                </div>
                                <ul class="plan-list">
                                    <li> 48 Weeks a Year </li>
                                    <li> Dedicated Trainer Allocated </li>
                                    <li> Diet Plan Inculuded </li>
                                    <li> Morning and Evening Batches </li>
                                </ul>
                                <button type="button" onclick="window.location.href = 'about#1-year-challenge';" class="fill-btn">explore more</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Plans Section Ends -->



        <!-- testimonial Section Begins -->
        <section id="testimonial" class="testimonial pad-top-115 pad-bottom-120">
            <div class="testimonialBg parallax"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="titleText">
                            <h6 class="titleTop">Our Clients</h6>
                            <h2 class="sectionTitle pad-bottom-60">SUCCESS <span>STORIES</span></h2>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <div class="clientSlide">
                                <div id="owl-testimonial" class="testimonial-slider">
                                    <div class="item">
                                        <img src="images/testImg.png" alt="images" />
                                        <div class="spacer left">
                                            <div class="mask"></div>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi t aliquip ex ea commodo consequat. </p>
                                        <h4> Aena Deo </h4>
                                        <h5> Lost 20 LBS in 2 Months </h5>
                                    </div>
                                    <div class="item">
                                        <img src="images/testImg-2.png" alt="images" />
                                        <div class="spacer left">
                                            <div class="mask"></div>
                                        </div>
                                        <p> In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
                                        <h4> Tami Flores </h4>
                                        <h5> Lost 25 LBS in 3 Months </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial Section Ends -->

       

        <!-- footer Section Begins -->
        <section id="footer" class="footer pad-top-120 pad-bottom-120">
            <div class="footerBg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_logo">
                            <figure><img src="images/logo.png" alt="image" /></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-form btm-brdr">
                            <div class="form-Box">
                                <input type="text" placeholder="Name" class="b_effect" />
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <input type="text" placeholder="Email" class="b_effect" />
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <textarea placeholder="Message" class="b_effect"></textarea>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                            <div class="form-Box">
                                <input type="submit" value="Submit" class="fill-btn" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-address btm-brdr">
                            <h4 class="fTitle"> Contact <span>Us</span> </h4>
                            <ul>
                                <li> <i class="fa fa-phone" aria-hidden="true"></i> <span>0123 456 789</span> </li>
                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> <span>123, Street No, State, City, Country</span> </li>
                                <li>
                                    <a href="#"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <span>info@lytrfitness.com</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="subscribe btm-brdr">
                            <h4 class="fTitle"> Subscribe <span>Newsletter</span> </h4>
                            <form>
                                <input type="text" placeholder="Example@example.com" />
                                <button type="button" class="fill-btn">Subscribe</button>
                            </form>
                        </div>
                        <div class="social-icons">
                            <h4 class="fTitle"> Social <span>News</span> </h4>
                            <ul>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="'#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer Section Ends -->

       <!-- modal section begins -->

       <!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal">
        <div class="modal-dialog" role="document">
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
                        <a href="login" class="alt-link">Already a Member? Click here to Login</a>
                    </div>
             
                    
                </div>
                
            </div>
            
          </div>
        </div>
      </div>
    
      <!-- modal section ends  -->

          <!-- Modal -->
<div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="subscribe-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titleText text-center">
                            <h6 class="titleTop">Get Newsfeed Daily</h6>
                            <h2 class="sectionTitle">SUBSCRIBE <span>NOW</span></h2>
                        </div>
                    </div>
                    <form id="subscribe-form">
                        <div class="col-md-12">
                            <div class="form-Box">
                                <input type="text" placeholder="Email" class="b_effect" />
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-Box text-center">
                                <input type="submit" value="Submit" class="fill-btn" />
                            </div>
                        </div>
                    </form>
             
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>
    
      <!-- modal section ends  -->

        <!-- Back to top Section Begins -->
        <a href="javascript:void(0);" class="back-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
        <!-- Back to top Section Ends -->

       

    </div>


     <!-- Jquery Js -->
     <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/element.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/toast.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

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
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123020572-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123020572-1');
</script>