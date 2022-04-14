   <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daily Task


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
                                            <th>Assigned To</th>
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
                                            <th>Assigned To</th>
                                            <th>Created Date</th>
                                            <th>CreatedBy</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                                        <?php

if (isset($jobs)) : foreach ($jobs as $rowjobs):
   
       // $rowrepairs->jobcardno;
?>
                                        <tr>
                                            <td><?php echo $rowjobs->job_id; ?></td>
                                             <td><?php echo $rowjobs->jobname; ?></td>
                                              <td><?php echo $rowjobs->cust_name; ?></td>                                          
                                                  <td><?php echo $rowjobs->status_name; ?></td>
                                                <td><?php echo $rowjobs->assignedto; ?></td>
                                                <td><?php echo $rowjobs->created_date; ?></td>
                                                <td><?php echo $rowjobs->createdby; ?></td>
                                                <td><?php

                                                if($role != 1)
                                                {
                                                     echo anchor("main/viewjob/$rowjobs->job_id",'view');
                                                }else
                                                {
                                                     echo anchor("main/assign/$rowjobs->job_id",'Assign');
                                                    echo " / ";  
                                                    echo anchor("main/viewjob/$rowjobs->job_id",'view');
                                                }
                                                   

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