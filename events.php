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
                     
    <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                           
                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <div class="titleText text-center">
                               
                                       <h2 class="sectionTitle">WEEKLY <span>SCHEDULE</span></h2>
                                   </div>
                               </div>
                           </div>
                       </div>
                    
                       <div id="workout_carousel" class="owl-carousel owl-theme">
                              
                            <?php echo get_weekly_calender(); ?>
                        </div>

<?php include('./footer.php'); ?>

<script>
  
</script>