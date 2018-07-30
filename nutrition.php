<?php include('./header.php'); ?>

<body id="mainBox" class="bg-gray" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="150">
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
                                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" /></a>
                                        </div>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="about">About</a></li>
                                            
                                            <li class="active"><a href="nutrition">Nutrition </a></li>
                                           
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
    
    <!-- Banner Section Begins -->
      <!-- Banner Section Begins -->
      <div class="inner-pages news-banner">
      <section class="inner-banner">
            <div class="container pr">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="bannerText wow animated fadeInUp" data-wow-delay="0.5s">
                            <h1> Nutrition </h1>
                            <!-- <ol class="breadcrumb">
                                
                                <li class="breadcrumb-item active">Nutrition</li>
                            </ol> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- Banner Section Ends -->

    </div>

    <div class="main">

        <!-- hot-news Section Begins -->
        <section id="hot-news" class="hot-news pad-top-115">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">READY TO GO?</h6>
                                <h2 class="sectionTitle">Nutrition </h2>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- hot-news Section Ends -->

        <!-- hot-news Section Begins -->
        <section id="news-list" class="news-list pad-bottom-120">
            <div class="container pr">
                <div class="row news">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 news-list-left" id="blog-content">
                    <?php
                                include('class/init.php');

                                $sql = "SELECT * FROM blog ORDER BY id DESC";

                                $result = $conn->query($sql);
                                
                                    if ($result->num_rows > 0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        { 
                                            $flag = $row['flag'];

                                            if($flag == 'free' || (isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == true) ) {
                                                echo '<div class="n-listing wow animated fadeInUp" data-wow-delay="0.5s">
                            
                                                '.$row['content'].'
                                                </div>';  
                                            } else {
                                                echo '<div class="n-listing wow animated fadeInUp" data-wow-delay="0.5s">
                                               
                                                        <h4 class="nlist-title"><strong> <a href="#">'.$row['title'].'</a> </strong></h4>
                                                        <div class="element-btn"><a href="#" class="element-fill-btn">UPGRADE TO PREMIUM</a></div>
                                                
                                                    </div>';
                                            }
                                            
                                        } 
                                    }
                        
                        
                    ?>
                       
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar-widget">
                        <div class="widget widget_search wow animated fadeInUp" data-wow-delay="0.5s">
                            <h5 class="widget-title">FIND MORE RECIPE</h5>
                            <form>
                                <input type="text" id="blog-search" placeholder="Enter Your Search Keyword">
                                <button type="button" class="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                       
                        
                        <div class="widget widget_tag_cloud wow animated fadeInUp" data-wow-delay="0.5s">
                            <h5 class="widget-title">FEATURED Tags</h5>
                            <div class="tagcloud">
                                <?php 
                                    $sql = "SELECT * FROM blog ORDER BY id DESC";

                                    $result = $conn->query($sql);
                                    
                                        if ($result->num_rows > 0)
                                        {   
                                            $tags = array();
                                            $tag_array = array();
                                            while($row = $result->fetch_assoc())
                                            { 
                                                $temp_tags = explode(',', $row['tags']);
                                                foreach($temp_tags as $temp_tag) {
                                                    array_push($tags, $temp_tag);
                                                }
                                               
                                            }
                                            $tag_array = array_unique($tags);
                                        }
                                        // print_r($tags);
                                      

                                        foreach($tag_array as $t) {
                                            echo '<a href="#" class="tag-link">'.$t.'</a>';
                                        }


                                ?>
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hot-news Section Ends -->

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

        <?php include('./footer.php'); ?>

        <script>
            $('#blog-search').on('keyup', function(){
                var data = $(this).val();
                $.ajax('class/get_blog', {
                    type: 'POST',  // http method
                    data: {keyword: data},  // data to submit
                    success: function (data, status, xhr) {
                        $("#blog-content").html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                        //    Materialize.toast('Please Try Again', 1000);
                        }
                });
            });
            
            $(document).on('click', '.tag-link', function(e){
                e.preventDefault();
                ele = $(this);
                val = ele.html();

                
                    // alert(id);
                    $.ajax('class/get_keyword_blog', {
                            type: 'POST',  // http method
                            data: {keyword: val},  // data to submit
                            success: function (data, status, xhr) {
                                $("#blog-content").html(data);
                            },
                            error: function (jqXhr, textStatus, errorMessage) {
                                // $('p').append('Error' + errorMessage);
                                //    Materialize.toast('Please Try Again', 1000);
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