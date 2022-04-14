<?php

 $username = ($this->session->userdata['logged_in']['username']);
  $id = ($this->session->userdata['logged_in']['userid']);
?>
<style type="text/css">
  .btn-group a{
    color: white;
  }
  </style>

 <link href="<?php echo base_url();?>assets/senbot/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
     <script src="<?php echo base_url();?>assets/senbot/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>


  <div class="span9" id="content">
                
                    <div class="row-fluid">
                                <div class="block-content collapse in">

                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h4 style="color:black;">All Repairs</h4>
                             
                                
                                  <!--<a href='<?= base_url() ?>/exportExcelFile/index'>Export to Excel</a>-->
                                  
                                  
                               </div>
                                <div class="pull-right"><span class="badge badge-warning"></span>

                                </div>
                            </div>
                            <div class="block-content collapse in">

                                <div class="span3 chart-bottom-heading"> 
                                <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="">
                                 
                                <i class="icon-globe icon-4x"></i>
                               Gt Not Reporting :  
                                
                                </div>


                                </div>     
                                   <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $not_reporting; ?></h2>                  
            
                  </div>
                                </div>
                                <div class="span3 chart-bottom-heading">
                                    <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="">
                                 
                                <i class="icon-filter icon-4x"></i>
                               Fuel Probes:  
                                
                                </div>


                                </div>

                                    <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $probes; ?></h2>                  
            
                  </div>
                                </div>
                                <div class="span3 chart-bottom-heading">
                                     <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="">
                                 
                                <i class="icon-facetime-video icon-4x"></i>
                               Mix Vision :  
                                
                                </div>


                                </div>
                                <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $camera; ?></h2>                  
            
                  </div>
                                </div>
                                <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">
                              
                              
                                       <div class="">
                                 
                                <i class="icon-map-marker icon-4x"></i>
                              Fm Gps :  
                                
                                </div>

                                </div>                           
                                    <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $fmgps; ?></h2>                  
            
                  </div>

                                    <div class="chart-bottom-heading">
                                   
                                    </div>

                                </div>
                            </div>


                            <!--lock teo-->
                              <div class="block-content collapse in">
                                
                                <div class="span3 chart-bottom-heading"> 
                                <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="muted pull-left">
                                 
                                <i class="icon-globe icon-4x"></i>
                            NO RPM:  
                                
                                </div>


                                </div>     
                                    <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $norpm; ?></h2>                  
            
                  </div>
                                </div>
                                <div class="span3 chart-bottom-heading">
                                    <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="muted pull-left">
                                 
                                <i class="icon-road icon-4x"></i>
                               No Speed :  
                                
                                </div>


                                </div>

                                     <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $nospeed; ?></h2>                  
            
                  </div>
                                </div>
                                <div class="span3 chart-bottom-heading">
                                     <div class="navbar navbar-inner block-header">
                              
                                  
                                       <div class="muted pull-left">
                                 
                                <i class="icon-asterisk icon-4x"></i>
                              No Certificate :  
                                
                                </div>


                                </div>
                               <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $nocertificate; ?></h2>                  
            
                  </div>
                                </div>


                                <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">                      
                                  <div class="">
                                 
                                <i class="icon-off icon-4x"></i>
                               No Panic Button :  
                                 </div>

                                </div>                           
                      <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $panicbtn; ?></h2>                  
            
                  </div>
                   <div class="chart-bottom-heading">                             
                                    </div>

                                </div>
                            </div>
                            <!--lock tree-->
                              <div class="block-content collapse in">
                                
                              <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">                      
                                  <div class="">
                                 
                                <i class="icon-off icon-4x"></i>
                               No Tacho Data :  
                                 </div>

                                </div>                           
                      <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $notacho; ?></h2>                  
            
                  </div>
                   <div class="chart-bottom-heading">                             
                                    </div>

                                </div>
                               <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">                      
                                  <div class="">
                                 
                                <i class="icon-off icon-4x"></i>
                              Vehicle Not Starting :  
                                 </div>

                                </div>                           
                      <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $vns; ?></h2>                  
            
                  </div>
                   <div class="chart-bottom-heading">                             
                                    </div>

                                </div>
                              <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">                      
                                  <div class="">
                                 
                                <i class="icon-off icon-4x"></i>
                               Fm Unit Not Powering :  
                                 </div>

                                </div>                           
                      <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $fmnot_powering; ?></h2>                  
            
                  </div>
                   <div class="chart-bottom-heading">                             
                                    </div>

                                </div>
                              <div class="span3 chart-bottom-heading">  
                                 <div class="navbar navbar-inner block-header">                      
                                  <div class="">
                                 
                                <i class="icon-d icon-4x"></i>
                              Fm Not Downloading Via Gprs  :  
                                 </div>

                                </div>                           
                      <div class="alert alert-info alert-block">         
                    <h2 class="alert-heading"><?php echo $fmnotdownloading; ?></h2>                  
            
                  </div>
                   <div class="chart-bottom-heading">                             
                                    </div>

                                </div>
                        </div>
                        <!-- /block -->
                        
                    </div>


                  

                        

                        
                        </div>   </div>
                        </div>
                        <!-- /block -->
                     
                    </div>  
                    </div>

                        </div>
                        <!-- /block -->
                     
                    </div>

<!--end here-->



                          </div>
                          

                        </div>
                        <!-- /block -->
                     
                    </div>
                                
                </div>
            </div>
        </div>

       <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/senbot/vendors/morris/morris.css">

        

        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="vendors/jquery.knob.js"></script>
        <script src="vendors/raphael-min.js"></script>
        <script src="vendors/morris/morris.min.js"></script>-->

         <script src="<?php echo base_url();?>assets/senbot/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/jquery.knob.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/morris/morris.min.js"></script>
       


 <script>
              

    // Build jQuery Knobs
        $(".knob").knob();

        function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; color:white;'>" + label + "" +  + "</div>";
        }


 </script>
 
 
 
 
 
 

 
 
 
 
 
 
 
 