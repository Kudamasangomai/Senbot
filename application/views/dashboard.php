<?php



    $username = ($this->session->userdata['logged_in']['username']);  
    $last_name = ($this->session->userdata['logged_in']['last_name']);  
    $userid = ($this->session->userdata['logged_in']['userid']);
    $myrepairs =$this->get_query_model->myrepairs($userid);
    $user_role = ($this->session->userdata['logged_in']['user_role']);


                    



?>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 <link href="<?php echo base_url();?>adminsb/plugins/morrisjs/morris.css" rel="stylesheet" />
 
  <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'main/dasboard/getdata' ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 900, height: 500}); 
    } 
 
    </script> 
 <section class="content">
  <br/>
        <div class="container-fluid">
   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
                        <div class="header">
                <h2 style="color:white;">DASHBOARD</h2>
            </div>
</div>

            <!-- Widgets -->
            <div class="row clearfix" style="height:100vh;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-blue">
                          <i class="material-icons">settings_input_antenna</i>
                        </div>
                        <div class="content">
                            <div class="text">Not Reporting</div>
                      <h5><?php echo $not_reporting; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                          <i class="material-icons">local_gas_station</i>
                        </div>
                        <div class="content">
                            <div class="text"> Faulty Probe</div>
                               <h5><?php echo $probes; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                          <i class="material-icons">videocam</i>
                        </div>
                        <div class="content">
                            <div class="text">Mix Vision</div>
                             <h5><?php echo $camera; ?></h5>
                           
                          
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                    <i class="material-icons">gps_off</i>
                        </div>
                        <div class="content">
                            <div class="text">Fm Gps</div>
                           <h5><?php echo $fmgps ;?></h5>
                        </div>
                    </div>
                </div>
            
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                             <i class="material-icons">av_timer</i>
                        </div>
                        <div class="content">
                            <div class="text"> No Rpm</div>
                               <h5><?php echo $norpm; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                          <i class="material-icons">av_timer</i>
                        </div>
                        <div class="content">
                            <div class="text"> No Speed</div>
                               <h5><?php echo $nospeed; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                         <i class="material-icons">ac_unit</i>
                        </div>
                        <div class="content">
                            <div class="text"> No certificate</div>
                               <h5><?php $nocertificate; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                         <i class="material-icons">radio_button_checked</i>
                        </div>
                        <div class="content">
                            <div class="text">   No Panic Button</div>
                               <h5><?php echo $panicbtn; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                            <i class="material-icons">graphic_eq</i>
                        </div>
                        <div class="content">
                            <div class="text">     No Tacho Data</div>
                               <h5><?php echo $notacho; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box  hover-zoom-effect">
                        <div class="icon bg-blue">
                          <i class="material-icons">local_shipping</i>
                        </div>
                        <div class="content">
                            <div class="text">  Vehicle Not Starting </div>
                               <h5><?php echo$vns; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-blue">
                             <i class="material-icons">settings_power</i>
                        </div>
                        <div class="content">
                            <div class="text">    Fm Unit Not Powering</div>
                               <h5><?php echo $fmnot_powering; ?></h5>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect ">
                        <div class="icon bg-blue" >
                           <i class="material-icons">no_sim</i>
                        </div>
                        <div class="content">

                            <div class="text">   Fm Not Downloading Via Gprs</div>
                               <h5><?php echo $fmnotdownloading; ?></h5>
                        </div>
                    </div>
                </div>
               
            <div class="row clearfix">
               
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body bg-light-blue">
                            <div class="m-b--35 font-bold">Most Reparied faults</div>
                            <ul class="dashboard-stat-list">
                              
                                <?php

if (isset($most_repaired_fault)) : foreach ($most_repaired_fault as $mostrepaired):
   
      
?>
                                <li>
                                   <?php echo $mostrepaired->faults; ?>
                                    <span class="pull-right"><b><?php echo $mostrepaired->total; ?></b> <small>times</small></span>
                                </li>
                                         <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>    
                              

                              <li>
                           
           <span class="pull-right" style="background-color:white;border-radius:50px;padding:2px;"><b ><?php echo anchor('main/mostrepaired_f','View All') ?></b> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body bg-light-blue">
                            <div class="font-bold m-b--35">Most Repaired Trucks</div>
                            <ul class="dashboard-stat-list">


  <?php

if (isset($most_repaired)) : foreach ($most_repaired as $mostrepaired):
   
      
?>
                                <li>
                                   <?php echo $mostrepaired->fleetno; ?>
                                    <span class="pull-right"><b><?php echo $mostrepaired->total; ?></b> <small>times</small></span>
                                </li>
                                         <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>  


                              <li>
                           
                                    <span class="pull-right" style="background-color:white;border-radius:50px;padding:2px;"><b ><?php echo anchor('main/mostrepaired_T','View All') ?></b> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>
            </div>
            <!-- #END# Widgets -->

      </div>
                </div>
            <div class="row clearfix">
         
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
              
              <!-- #END# Task Info -->
         
            </div>
        </div>
    </section>
    <div id="chart_div"></div>
 <!-- Jquery DataTable Plugin Js -->
   <script src="<?php echo base_url();?>adminsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/bootstrap/js/bootstrap.js"></script>
    
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script src="<?php echo base_url();?>adminsb/js/admin.js"></script>
    <script src="<?php echo base_url();?>adminsb/js/pages/tables/jquery-datatable.js"></script>

      <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.time.js"></script>
       </body>
       <script src="<?php echo base_url();?>adminsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>


         <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>
     <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url();?>adminsb/plugins/chartjs/Chart.bundle.js"></script>