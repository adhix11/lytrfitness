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
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="titleText">
                                        <h6 class="titleTop">ANY CONTENT HERE</h6>
                                        <h2 class="sectionTitle">CREATE <span>NUTRITION</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                              <form action="class/submit_blog" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-Box">
                                            <input type="text" name="title" placeholder="Title" class="b_effect" required>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-Box">
                                            <input type="text" name="tags" placeholder="Tags (Seperated by Comma eg: Tag1, Tag2, tag3)" class="b_effect" required>
                                            <span class="focus-border">
                                                <i></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-Box">
                                            <select class="b_effect" name="flag" required>
                                                
                                                <option value="free" selected>Free</option>
                                                <option value="paid">Paid</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="edit" name="main-content"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="element-btn"><button type="submit" class="element-fill-btn">CREATE NUTRITION</button></div>
                                    </div>
                                </div>
                                    
                              
                              </form>
                               <hr class="hr">
                            </div>
                            <div class="col-md-8">
                            <?php
                                include('class/init.php');

                                $sql = "SELECT * FROM blog ORDER BY id DESC";

                                    $result = $conn->query($sql);
                                    
                                        if ($result->num_rows > 0)
                                        {
                                            while($row = $result->fetch_assoc())
                                            {

                                            $f = '';
                                            $p = '';

                                            $flag = $row['flag'];
                                            if($flag == 'free') {
                                                $f = 'selected';
                                            } else {
                                                $p = 'selected';
                                            }
                                              echo '<form class="update_blog">
                                              <input type="hidden" name="id" value="'.$row['id'].'" />
                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="form-Box">
                                                          
                                                          <input type="text" name="title" placeholder="Title" class="b_effect" value="'.$row['title'].'" required>
                                                          <span class="focus-border">
                                                              <i></i>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-Box">
                                                          <input type="text" name="tags" placeholder="Tags" class="b_effect" value="'.$row['tags'].'" required>
                                                          <span class="focus-border">
                                                              <i></i>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="form-Box">
                                                          <select class="b_effect" name="flag" required>
                                                              
                                                              <option value="free" '.$f.'>Free</option>
                                                              <option value="paid" '.$p.'>Paid</option>
                                                          </select>
                                                          
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <textarea class="edit" name="main-content">'.$row['content'].'</textarea>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <div class="element-btn"><button type="submit" class="element-fill-btn">UPDATE NUTRITION</button><a href="#" data-id="'.$row['id'].'" class="delete"><i class="material-icons">delete</i></a></div>
                                                  </div>
                                              </div>
                                                  
                                            
                                            </form>';
                                            
                                            }

                                            

                                        } else {
                                            echo '<br>';
                                        }  
                                        
                                        ?>
                            </div>

                        </div>

                      




                    </div>
                </div>
                    
                </section>
    </section>




     

<?php include('./footer.php'); ?>

 
  <!-- Initialize the editor. -->
  <script>
    $(function() {
      $('.edit').froalaEditor({
 
        // Set the video upload URL.
            imageUploadURL: 'class/upload_image',
 
            imageUploadParams: {
              id: 'my_editor'
            },
            videoUploadURL: 'class/upload_video',
            videoUploadParams: {
              id: 'my_editor'
            },
      })
    });

    $('.update_blog').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax('class/update_blog', {
                    type: 'POST',  // http method
                    data: data,  // data to submit
                    success: function (data, status, xhr) {
                       
                        alert('Updated');
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                        //    Materialize.toast('Please Try Again', 1000);
                        }
                });
        
    });


    $(document).on('click', '.delete', function(){
        ele = $(this);
        id = ele.data('id');

        if(confirm('Are you sure want to delete?')) {
            ele.closest('.update_blog').fadeOut('slow');
            // alert(id);
            $.ajax('class/delete_blog', {
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

  </script>
