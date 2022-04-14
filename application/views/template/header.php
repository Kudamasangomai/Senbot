<?php



date_default_timezone_set("Africa/Cairo");
            $time =  Date('Y-m-d h:i:s');

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);  
    $last_name = ($this->session->userdata['logged_in']['last_name']);  
    $userid = ($this->session->userdata['logged_in']['userid']);
    $myrepairs =$this->get_query_model->myrepairs($userid);
    $user_role = ($this->session->userdata['logged_in']['user_role']);


                    

} else {
   
  redirect($index_page);
}
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $title; ?></title>
        <!-- Bootstrap -->
           <!-- Bootstrap Core Css -->
         

    <link href="<?php echo base_url();?>adminsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>adminsb/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>adminsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>adminsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>adminsb/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>adminsb/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>adminsb/css/themes/all-themes.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">


  
    </head>

  <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Senbot helpdesk</a>
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          
                            
          
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
               <br/>
                    <li>
                        <div class="icon">
                          <i class="material-icons">person</i>
                          <?php echo ucfirst(  $last_name); ?>
                        </div>
                        
                        </li>
                    </ul>

                </div>
                    <!-- #END# Call Search -->
           
        </div>
    </nav>
    <!-- #Top Bar -->


              <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                   <!-- <img src="<?php echo base_url();?>adminsb/images/user.jpg" width="48" height="48" alt="User" />-->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php  ?></div>
                    <div class="email">
<br/>
                        </div>
                    <div class="btn-group user-helper-dropdown">

                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu style="background-color:#2196F3"-->
            <div class="menu" >
                <ul class="list" >
                
                 <br/>          
                     <li class="active">
                  
                        <span><?php echo anchor('main/dashboard', ' Dashboard')  ?></span>                  
                     
                    </li>
                     <li class="active">
                  
                        <span><?php echo anchor('main/Repairs', ' Repairs')  ?></span>                  
                     
                    </li>
                    <li class="active">
                  
                        <span><?php
                        
                        if( $user_role != 9 and $user_role != 5)
                        {
                                echo "";
                        }else
                        {
   echo anchor('create_con/create_fault', ' Create Job') ;
                        }
                      
                         
                          ?></span>                  
                     
                    </li>
                    <li class="active">
                
                        <span><?php echo anchor('main/myrepairs/'.$userid, 'My Repairs ')  ?></span>
                           <?php                           
                                if (isset($myrepairs))
                                {
                            ?>
     <span class="label-count" 
     style="background-color:green;
            color:white;
            width:20px;
            height:20px;
            text-align:center;
            margin-top:10px;">
         <?php   echo $myrepairs; ?>
         </span>

                                  <?php 
                                }else
                                {
                                    echo "";
                                }

                             ?>                  
                 
                 
                    </li>
                      <li class="active">
                  
                        <span><?php echo anchor('main/completed', ' Completed')  ?></span>                  
               
                    </li>

                     <li class="active">
                  
                        <span><?php echo anchor('main/tanks', ' Tanks')  ?></span>                  
               
                    </li>
                    
                    
                     <li class="active">
                  
                        <span><?php
                        
                        
   if( $user_role != 9 )
                        {    
                            echo "";
                               }
                        else
                        {
                         echo anchor('main/faults', 'Faults')  ;
                           echo anchor('User_settings/manage_users', 'Users') ;
                     
                        }
?>       </span>               
                    </li>
                  
                   
                    <li class="active">
                  
                        <span><?php echo anchor('auth/logout', ' logout')  ?></span>                  
                     
                    </li>
                
                   
      
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                       
                    </li>
                  
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021<a href="javascript:void(0);"> Senbot</a>.
                </div>
                <div class="version">
     <br/>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
<body>

     <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url();?>adminsb/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>adminsb/js/admin.js"></script>
    <script src="<?php echo base_url();?>adminsb/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>adminsb/js/demo.js"></script>
    
    
        
                      
                 
        
 

      











 




    
    </body>

</html>