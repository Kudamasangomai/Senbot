<?php



if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
  
    $userid = ($this->session->userdata['logged_in']['userid']);
   $user_role = ($this->session->userdata['logged_in']['user_role']);
} else {
   
  redirect($index_page);
}
?>

<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<section class="content">

     <div class="container-fluid">
         

 <div class="row clearfix">
                <!-- Task Info -->
                 <!-- Exportable Table -->
              
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h2 style="color:white;">
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

if (isset($job_full_details)) : foreach ($job_full_details as $rowrepairs):
   
     
?> 
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
    <tbody>

                <tr><td>Job Card Number</td><td><?php echo 'CAR'.$rowrepairs->jobcardno; ?></td></tr>
            <tr><td>Fleet</td><td><?php echo $rowrepairs->fleetno; ?></td></tr>
            <tr><td>Fault</td><td><?php  echo $rowrepairs->faults; ?></td></tr>
           <tr><td>Status</td><td><?php  echo $rowrepairs->status; ?></td></tr>
        <tr><td>Created By</td><td><?php  echo $rowrepairs->techcreator; ?></td></tr>
        <tr><td>Assigned Tech</td><td><?php  echo $rowrepairs->last_name; ?></td></tr>
         <tr><td>Second Assigned Tech</td><td><?php 
                                    
    
    if ($rowrepairs->status == 'In Progress')
    {
    echo $rowrepairs->secondtechname; echo "<br/>"; 
    echo "</td></tr><tr><td></td><td>";
    
     echo anchor('main/secondassign/'.$rowrepairs->jobcardno,'Re Assign');
  
    }
    else
    {
        echo $rowrepairs->secondtechname; echo "<br/>";
    }
    
       echo "</td></tr>";
     ?>
    <tr><td>date</td><td><?php  echo date('d-M-y '.' - '.' h:i:s',$rowrepairs->datecreated ); ?></td></tr>
  
    <tr><td>Closed By</td><td><?php 

    if($rowrepairs->closedby == 0)
    {
      echo "Still Open";
    }else
    {
       echo ($rowrepairs->last_name );
    }


     ?></td></tr>
     
     <tr><td><center>Comments</center></td><td><?php  echo ($rowrepairs->repairdescription ); ?></td></tr>
    
    
    
  
    



                                       
                         
                                           
                              </tr>
                                     
                                  </tbody> 
                                  
                                    
               
                                </table>
                                                                         <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?> 
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
            </section>