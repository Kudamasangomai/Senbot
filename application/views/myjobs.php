<?php

 $user_emp_id = ($this->session->userdata['logged_in']['user_emp_id']);
  $user_id = ($this->session->userdata['logged_in']['user_id']);
  $role = ($this->session->userdata['logged_in']['role']);
  $lname = ($this->session->userdata['logged_in']['lname']);

?>
<body>
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>.</h2>
            </div>

 
    
            <div class="row clearfix">
         
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                 <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                My Jobs


                            </h2>
                              <h4>
   

 <?php

                          if($this->session->flashdata('msg_done')){

                            $msg = $this->session->flashdata('msg_done');
                          ?>
                          <div class="alert alert-success">
                          <center>  <?php echo $msg; ?></center>
                          </div>
                          <?php

                              }else
                              {
                                    $msg = $this->session->flashdata('msg_error');
                              }
                          ?>
                         <!-- <div class="alert alert-danger">
                          <center>  <?php echo $msg; ?></center>
                          </div>-->
                          
                            </h4>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                  
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Job id</th>
                                            <th>Job Name</th>
                                            <th>Customer</th>
                                      
                                              <th>status</th>
                               
                                            <th>Created Date</th>
                                            <th>CreatedBy</th>
                                              <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Job id</th>
                                            <th>Job Name</th>
                                            <th>Customer</th>
                                          
                                            <th>status</th>
                                     
                                            <th>Created Date</th>
                                            <th>CreatedBy</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                                        <?php

if (isset($my_jobs)) : foreach ($my_jobs as $rowjobs):
   
       // $rowrepairs->jobcardno;
?>
                                        <tr>
                                            <td><?php echo $rowjobs->job_id; ?></td>
                                             <td><?php echo $rowjobs->jobname; ?></td>
                                              <td><?php echo $rowjobs->cust_name; ?></td>                                          
                                                  <td><?php echo $rowjobs->status_name; ?></td>
                                            
                                                <td><?php echo $rowjobs->created_date; ?></td>
                                                <td><?php echo $rowjobs->createdby; ?></td>
                                                <td><?php

                                                    

                                            echo anchor("main/close_job/$rowjobs->job_id",'Close Job');



                                                 ?></td>

                                        </tr>
                                      <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>  
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Task Info -->
         
            </div>
        </div>
    </section>
 <!-- Jquery DataTable Plugin Js -->
   <script src="<?php echo base_url();?>adminsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    
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