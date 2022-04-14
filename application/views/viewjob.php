<section class="content">

     <div class="container-fluid">
            <div class="block-header">
          <h2>...</h2>
            </div>

 <div class="row clearfix">
                <!-- Task Info -->
                 <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              View Job


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
                             <?php

if (isset($get_job)) : foreach ($get_job as $rowrepairs):
   
     
?> 
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
 

                                    <tr><td>Job id</td><td><?php echo $rowrepairs->job_id; ?></td></tr>
                                    <tr><td>Job Name</td><td><?php echo $rowrepairs->jobname; ?></td></tr>
                                    <tr><td>Customer</td><td><?php echo $rowrepairs->cust_name; ?></td></tr>
                                    <tr><td>status</td><td><?php echo $rowrepairs->status_name; ?></td></tr>
                                    <tr><td>Assigned To</td><td><?php echo $rowrepairs->assignedto; ?></td></tr>
                                    <tr><td>Created Date</td><td><?php echo $rowrepairs->created_date; ?></td></tr>
                                    <tr><td>CreatedBy</td><td><?php echo $rowrepairs->createdby; ?></td></tr>
                                    <tr><td>location</td><td><?php echo $rowrepairs->location; ?></td></tr>
                                    <tr><td>contact details</td><td><?php echo $rowrepairs->contact_details; ?></td></tr>
                                     <tr><td>Job description</td><td><?php
                                     if($rowrepairs->status_name != 'completed')

                                     {
                                         echo  'N/A';
                                     }else
                                     {
                                         echo $rowrepairs->jobdescription;
                                     }
                                     
                                     
                                    ?></td></tr>
                                     
                                
                                  
                                    
               
                                </table>
                                                                         <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </section>
            