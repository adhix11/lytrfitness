<?php 
    @session_start();
    
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {

    } else {
        header('Location: ../class/logout_process.php');
    }

   
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
     $admin = true;
 } else {
    $admin = false;
 }





?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title> Lytr Fitness </title>
   

    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
    <link type="text/css" href="../css/animate.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   
    <link type="text/css" rel="stylesheet" href="../css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="../webkit/webkit.css">
    <link type="text/css" rel="stylesheet" href="../css/font-awesome.css">
    <link type="text/css" href="../css/style.css" rel="stylesheet" />
    <link type="text/css" href="../css/media.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/sidebar.css" type="text/css" />
    <link rel="stylesheet" href="../css/style1.css" id="colors">
    <link rel="stylesheet" href="../enjoyhint/jquery.enjoyhint.css" id="colors">
    
    <!-- <link rel="stylesheet" href="css/tap-target.css" id="colors"> -->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

<!-- Bootstrap styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Generic page styles -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<style>
    .sidebar {
        width: 14rem;
        height: 100vh;
    }
</style>
</head>


    
    <body class="bg-gray">
    <nav class="sidebar">
        <ul>
            <li class="hamburger">
              
                <i class="material-icons">menu</i>
             
            </li>
            
            <?php if($admin == true) : ?>
                <li class="active"><a href="../admin_dashboard"> Challenges </a></li>
            <?php endif; ?>

            <?php if($admin == false) : ?>
                <li class="active"><a href="../dashboard"> Dashboard </a> </li>
            <?php endif; ?>

            <?php if($admin == true) : ?>
                
                <li><a href="../editor">Nutrition </a></li>
                <li><a href="../reports"> Reports </a></li>
                <li><a href="#">Transactions </a></li>
            <?php endif; ?>
            <?php if($admin == false) : ?>
            <li><a href="events"> Calender </a></li>
            <?php endif; ?>
            <!-- <li><i class="material-icons">settings</i></li> -->
            <li><a href="../class/logout_process"> Logout </a></li>
           
        </ul>
    </nav>

    <section class="main-content" style="margin-left: 14rem">
    <nav class="navbar navbar-default main-nav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../images/logo.png" /></a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="material-icons">notifications</i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">account_circle</i> </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings</a></li>
                        
                        <li><a href="#">Upgrade Plan</a></li>
                        
                    </ul>
                </li>
                
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
            <section>
                <div class="content">

                     
                    <div class="container-fluid">

    <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
        <div class="skewpink"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="titleText">
                    
                    <h2 class="sectionTitle">UPLOAD <span>VIDEOS</span></h2>
                </div>
            </div>
        </div>
    </div>

    
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
       
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">FAQ</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>The maximum file size for uploads in this demo is <strong>999 KB</strong> (default file size is unlimited).</li>
                <li>Only image files (<strong>GIF</strong>) are allowed </li>
                <li>Uploaded files will be deleted automatically after <strong>5 minutes or less</strong> (demo files are stored in memory).</li>
                <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage).</li>
            </ul>
        </div>
    </div>
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <label class="title">
                <span>Title:</span><br>
                <input name="title[]" class="form-control" value="{%=file.name%}">
            </label>
        </td>
        <td>
            <label class="description">
                <span>Description:</span><br>
                <input name="description[]" class="form-control">
            </label>
        </td>
        <td>
            <label class="count">
                <span>Count:</span><br>
                <input name="count[]" class="form-control">
            </label>
        </td>
        <td>
            <label class="set">
                <span>Set:</span><br>
                <input name="sets[]" class="form-control">
            </label>
        </td>
        <td>
            <label class="calories">
                <span>Calories:</span><br>
                <input name="calories[]" class="form-control">
            </label>
        </td>
       
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="title"><strong>{%=file.title||''%}</strong></p>
        </td>
        <td>
            <p class="description">{%=file.description||''%}</p>
        </td>

         <td>
            <p class="count"> <i class="material-icons">accessibility</i> {%=file.count||''%}</p>
        </td>

         <td>
            <p class="set">  <i class="material-icons">360</i>  {%=file.sets||''%}</p>
        </td>

         <td>
            <p class="calories">  <i class="material-icons">brightness_high</i>  {%=file.calories||''%}</p>
        </td>
        
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>

    
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/element.js"></script>
    <script type="text/javascript" src="../js/modernizr.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="../js/waypoints.min.js"></script>
    <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="../js/sidebar.js"></script>
    <script type="text/javascript" src="../enjoyhint/enjoyhint.min.js"></script>
    <script type="text/javascript" src="../enjoyhint/enjoyhint_all.js"></script>
    <script type="text/javascript" src="../enjoyhint/jquery.enjoyhint.js"></script>
    <script type="text/javascript" src="../enjoyhint/kinetic.min.js"></script>
    <script type="text/javascript" src="../js/toast.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>

<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>
</html>
