<?php include('class/admin_check.php'); ?>
<?php include('./header.php'); ?>

    
<body class="bg-gray">
    <?php include('./sidebar.php'); ?>

    <section class="main-content">
        <?php include('./navigation.php'); ?>
        <?php include('class/functions.php'); ?>
        
            <section>
                <div class="content">

                     
                    <div class="container-fluid">
                       
                        

                        <div class="row" style="margin: 10px;">
                            
                            <div class="col-md-4">
                                <div class="stat-box red">
                                    <h1><?php echo get_no_of_users(); ?></h1>
                                    <p>Users</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-box blue">
                                    <h1><?php echo get_no_of_plan(); ?></h1>
                                    <p>Active Plans</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                
                            </div>
                               
                           
                           

                        </div>
                        <div class="row"  style="margin: 10px;">
                                
                        <div id="embed-api-auth-container"></div>
                        <div id="chart-container"></div>
                        <div id="view-selector-container"></div>

                        </div>

                        <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                            <div class="skewpink"></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="titleText">
                                        <h6 class="titleTop">ANY CONTENT HERE</h6>
                                        <h2 class="sectionTitle">REPORTS <span></span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <table class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Plan</th>
                <th>Days Left</th>
                <th>Subscription Status</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            include('class/init.php');

            $sql = "SELECT u.id, u.name, u.email, p.plan_name, u.plan_date, p.expiry, u.flag FROM user as u INNER JOIN plan as p ON u.plan_id = p.id WHERE u.role <> 'admin' ORDER BY u.email ASC";

            $result = $conn->query($sql);
            
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { 
                    $now = time();
                    $plan_date = $row['plan_date'];

                    $datediff = ($now - $plan_date);

                    $datediff = round($datediff / (60 * 60 * 24));
                    $datediff = $datediff - $row['expiry'];
                    $flag = $row['flag'];
                    $f = '';
                    if($flag == 'true') {
                        $f = 'checked';
                    }
                    echo '<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['plan_name'].'</td>
                    <td>'.max($datediff, 0).'</td>
                    <td>
                        <label class="switch">
                            <input data-id="'.$row['id'].'" type="checkbox" class="subscription_check" '.$f.'>
                            <span class="slider round"></span>
                        </label>
                  </td>
                    
                </tr>';
                }
            }
        ?>
            
       
        </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
                <th>Email</th>
                <th>Plan</th>
                <th>Days Left</th>
                <th>Subscription Status</th>
            </tr>
        </tfoot>
    </table>



                    </div>
                </div>
                    
                </section>
    </section>


    

     

<?php include('./footer.php'); ?>

<script>
        $(document).ready(function() {
    $('.table').DataTable();
} );

 $(document).on('click', '.subscription_check', function(){
        ele = $(this);
        val = ele.is(':checked');
        id = ele.data('id');

        
       
            // alert(id);
            $.ajax('class/update_user_flag', {
                    type: 'POST',  // http method
                    data: {val: val, id: id},  // data to submit
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
       
        
       
    });
    </script>

  <script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>

<script>

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: '172599590823-1r9ji804p0ioqs0hhvs8dsul2h99uphn.apps.googleusercontent.com'
  });


  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  // Render the view selector to the page.
  viewSelector.execute();


  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });


  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

});
</script>