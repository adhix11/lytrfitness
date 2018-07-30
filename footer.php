
     <!-- Jquery Js -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/element.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="enjoyhint/enjoyhint.min.js"></script>
    <script type="text/javascript" src="enjoyhint/enjoyhint_all.js"></script>
    <script type="text/javascript" src="enjoyhint/jquery.enjoyhint.js"></script>
    <script type="text/javascript" src="enjoyhint/kinetic.min.js"></script>
    <script type="text/javascript" src="js/toast.js"></script>
    <script type="text/javascript" src="js/typehead.js"></script>
    <script type="text/javascript" src="js/mousewheel.js"></script>

        


    <script type="text/javascript" src="js/custom.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    
     <!-- Modal -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="change_password">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titleText text-center">
                            <h6 class="titleTop">Any Content Here</h6>
                            <h2 class="sectionTitle">Change <span>Password</span></h2>
                        </div>
                    </div>
                    <form id="change_password_form">
                    <div class="col-md-12">
                        <div class="form-Box">
                            <input type="password" name="o_pass" placeholder="Old Password" class="b_effect" />
                            <span class="focus-border">
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-Box">
                            <input type="password" name="n_pass" placeholder="New Password" class="b_effect" />
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



    <script>
    $('#change_password_form').on('submit', function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax('class/change_password', {
                    type: 'POST',  // http method
                    data: data,  // data to submit
                    success: function (data, status, xhr) {
                       if(data === 'true') {
                        alert('Password Changed Successfully');
                        $('#change_password').modal('hide');
                       } else {
                        alert('Please Try Again');
                       }
                       
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                           // $('p').append('Error' + errorMessage);
                        //    Materialize.toast('Please Try Again', 1000);
                        }
                });
        
    });

    <!-- Global site tag (gtag.js) - Google Analytics -->


    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123020572-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123020572-1');
</script>
</body>
</html>