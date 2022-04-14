<?php

?>
<style type="text/css">
  .btn-group a{
    color: white;
  }
.card{


 height: 70vh;
  }
</style>
    

     <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>adminsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>adminsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url();?>adminsb/css/style.css" rel="stylesheet">

  
<section class="content">
  <div class="container-fluid">
  <div class="block-header">

   <h2></h2>
            </div>
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">       Assign Job     </h2>
                         </div>
                        <br/>
                         <?php
if(isset($assign_data)) : foreach ($assign_data as $row_assign):
 {

}
  ?>
  <?php echo form_open("main/assignto/{$row_assign->jobcardno}"); ?>

   <div class="col-md-3">
                                    <p>
                                        <b>Fleet No</b>
                                    </p>
                                    <?php echo $row_assign->fleetno;?>
                                </div>
                                 <div class="col-md-3">
                                  <p>
                                        <b>Fault</b>
                                    </p>
                                  <?php echo $row_assign->faults;  ?>
                                 </div>
                    <div class="col-md-3">

                       <p>
                                        <b>Assign To </b>
                                    </p>
                      <select class="form-control" id="exampleInputPassword1" name="assignto">
          <option> </option>
         <?php
         if (isset($gettech)) : foreach ($gettech as $rowp):
         ?>
           
        <option name="assignto" value="<?php echo $rowp->userid; ?>">
        <?php 
         echo $rowp->last_name; ?>
           
         </option>



       <?php endforeach; ?>  
       <?php else : ?>  
       <?php endif ; ?>
      </select>
       <?php echo form_error('assignto','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                    </div>            
<p>
                                        <b>&nbsp </b>
                                    </p>
 <button type="submit" class="btn btn-success waves-effect">Assign</button>
 <?php echo form_close(); ?>
 <br/><br/><br/>
</div>
</div>
</div>
                      </div>
                       </div>

                        </section>
                      
                      <?php endforeach; ?>  
   <?php else : ?>  
       <?php endif ; ?>





    <script src="<?php echo base_url();?>adminsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/bootstrap/js/bootstrap.js"></script>
 <script src="<?php echo base_url();?>adminsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="<?php echo base_url();?>adminsb/plugins/node-waves/waves.js"></script>
 <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

