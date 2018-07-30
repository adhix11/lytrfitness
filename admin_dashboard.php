<?php include('class/admin_check.php'); ?>
<?php include('./header.php'); ?>

    
<body class="bg-gray">
    <?php include('./sidebar.php'); ?>

    <section class="main-content">
        <?php include('./navigation.php'); ?>
        
            <section>
                <div class="content">

                     
                    <div class="container-fluid">
                       
                        <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                            <div class="skewpink"></div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="titleText">
                                        <h6 class="titleTop">ANY CONTENT HERE</h6>
                                        <h2 class="sectionTitle">CREATE <span>CHALLENGES</span></h2>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="element-btn">
                                    
                                       <a href="video_upload" class="element-fill-btn">Video Upload</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div id="challenges-list">
                                    
                                </div>
                                
                               
                            </div>
                            <div class="col-md-6">
                                <div class="element-btn" style="margin-top: 0px"><button type="button" data-toggle="modal" data-target="#create_challenges_modal" id="create-challenges-btn" class="element-fill-btn">CREATE CHALLENGES</button></div>
                            </div>

                        </div>

                        <section id="edit-panel">


                        </section>




                    </div>
                </div>
                    
                </section>
    </section>


         <!-- Modal -->
<div class="modal fade" id="create_challenges_modal" tabindex="-1" role="dialog" aria-labelledby="create_challenges_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="create_challenges_modal">Create Challenges</span> </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="create-challenges-form">
                            <div class="form-Box">
                                <input type="hidden" id="mode" name="mode" value="0" />
                                <input type="hidden" id="id" name="id" value="" />
                                <input type="text" id="title" name="title" placeholder="Enter Challenges Name" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>

                            <div class="form-Box">
                                <input type="number" id="days" name="days" placeholder="Enter No of Days" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>

                            <div class="form-Box">
                                <input type="number" id="price" step=".01" name="price" placeholder="Enter Price" class="b_effect" required>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>

                            <div class="col-md-12">
                                <div class="form-Box text-center">
                                  <input type="submit" id="create-challenges-button" value="Create" class="fill-btn" />
                                </div>
                            </div>
                        </form>

                        
                    </div>

                </div>

                    
            </div>
            
        </div>
    </div>
</div>

    

     

<?php include('./footer.php'); ?>

<script>
    $(document).ready(function(){
        get_challenges();
    });

    $('#create-challenges-btn').on('click', function(){
        $('#create-challenges-form').trigger('reset');
    });

    function get_challenges(){
        $.ajax('class/get_challenges',   // request url
                {
                    success: function (data, status, xhr) {// success callback function
                        $('#challenges-list').html(data);
                        
                        // $('.table-manipulation').DataTable({ "destroy":true, "paging": true, "searching": true, "aaSorting": [] }).draw();

                }
        });
    }

    $('#create-challenges-form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax('class/create_challenge', {
                    type: 'POST',  // http method
                    data: data,  // data to submit
                    success: function (data, status, xhr) {
                        //$('p').append('status: ' + status + ', data: ' + data);
                        // alert(data);
                        get_challenges();

                        $('#create_challenges_modal').modal('hide');
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                           Materialize.toast('Please Try Again', 1000);
                        }
                });
    });

    $(document).on('click', '.delete-challenges', function(){
        ele = $(this);
        id = ele.data('id');

        if(confirm('Are you sure want to delete?')) {
            ele.closest('.chip').fadeOut('slow');
            // alert(id);
            $.ajax('class/delete_challenges', {
                    type: 'POST',  // http method
                    data: {id: id},  // data to submit
                    success: function (data, status, xhr) {
                        //$('p').append('status: ' + status + ', data: ' + data);
                        
                        // get_challenges();

                        // $('#create_challenges_modal').modal('hide');
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                        //    Materialize.toast('Please Try Again', 1000);
                        }
                });
        }
        
       
    });


    $(document).on('click', '.edit-challenges', function(){
        
        ele = $(this);
        id = ele.data('id');
        title = ele.data('title');
        price = ele.data('price');
        days = ele.data('days');
        
        // alert(days);
        
        $('#mode').val(1);
        $('#id').val(id);
        $('#title').val(title);
        $('#price').val(price);
        $('#days').val(days);
              
        $('#create_challenges_modal').modal('show');
       
    });

    $(document).on('click', '.chip', function(){
        
        ele = $(this);
        $('.chip').removeClass('active');
        ele.addClass('active');
        id = ele.data('id');
        
        $.ajax('class/get_edit_workouts', {
                    type: 'POST',  // http method
                    data: {id: id},  // data to submit
                    success: function (data, status, xhr) {
                        //$('p').append('status: ' + status + ', data: ' + data);
                        
                        // get_challenges();

                        // $('#create_challenges_modal').modal('hide');
                        $('#edit-panel').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                        //    Materialize.toast('Please Try Again', 1000);
                        }
                });

               
    });


</script>