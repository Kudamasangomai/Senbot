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
  

   <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <h2 style="color:white;">
                           My Repairs


                            </h2>

                            <?php
                            if(isset($msg_done))
                            {

                              echo $msg_done;
                            }
                            ?>
                              
                           
                        </div>
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
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>Jobcard No</th>
                                               <th>Fleet No</th>
                                                <th>Fault</th>
                                                <th>Status</th>
                                                <th>Ceatedby</th>
                                                <th >Created On</th>                                              
                                              
                                                 <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                              <th>Jobcard No</th>
                                               <th>Fleet No</th>
                                                <th>Fault</th>
                                                <th>Status</th>
                                                <th>Ceatedby</th>
                                                <th >Created On</th>                                              
                                      
                                                 <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                         <?php
$count = 0;
if (isset($repairs)) : foreach ($repairs as $rowrepairs):
    
        $rowrepairs->jobcardno;
?>
    
                                         <tr>

<td><?php echo $rowrepairs->jobcardno; ?></td>
<td><?php echo $rowrepairs->fleetno; ?></td>
<td><?php  echo $rowrepairs->faults; ?></td>
<td><?php  echo $rowrepairs->status; ?></td>
<td><?php  echo $rowrepairs->techcreator; ?></td>
<td><?php  echo date('d / M / Y '.' - '.'H:i:s',$rowrepairs->datecreated); ?></td>


<td><?php 



echo anchor("main/job_full_details/$rowrepairs->jobcardno",'View');
 
echo " | ";

    echo "";

  echo anchor("main/closemyjob/$rowrepairs->jobcardno",'Close Job');  

 ?>
</td>

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


</div>
 </section>

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