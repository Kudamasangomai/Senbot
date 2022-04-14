<?php

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $userid = ($this->session->userdata['logged_in']['userid']);
    $user_role = ($this->session->userdata['logged_in']['user_role']);
} else {
   echo "string";
}


?>
<style type="text/css">
  .btn-group a{
    color: white;
  }

  section{
    height: calc(100vh - 70px);
  }

</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/chosen.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/prism.css')?>">


<script src="<?php echo base_url('chosen/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.proto.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/site.js') ?>"></script>
<section class="content" >
  <div class="container-fluid" >
  <div class="block-header">
                <!--<h2>REPAIRS</h2>-->
            </div>

   <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" >
                        <div class="header">
                             <h2 style="color:white;">
                              Create Fault


                            </h2>
                          </div>
                              <?php


if (isset($msg_done))
{
  echo '<div class="alert alert-success" role="alert"><center>'. $msg_done.'</center></div>';

}elseif(isset($msg_error))
{
   echo '<div class="alert alert-danger" role="alert"><center>'. $msg_error.'</center></div>';
}
else
{
  echo "";
}
?> 

<!-- Advanced Select -->
            
               
                 
                        <div class="body">
                             <?php echo form_open('create_con/create_job/'.$userid.'');?>
                            <div class="row clearfix">
                                <div class="col-md-3">
                                      <?php echo form_error('datetime','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                        <label>Select Date and Time</label>
                                    
                                    <input type="datetime-local" class="form-control show-tick" name="datetime" placeholder="kdk" value="<?php echo set_value('datetime', '0'); ?>"/>
                                </div>
                              
                             
                               <div class="col-md-3">
  <?php echo form_error('fleet','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
  <label>Select Fleet</label>
  <?php $options = array(""=>"") ?>
  <?php foreach ($myfleet as $key => $value): ?>
  <?php $options[$value->fleetno] = $value->fleetno; ?>
<?php endforeach; ?>
<?php echo form_dropdown('fleet',$options,set_value('fleet'),$attributes = array("data-placeholder"=>"Select Truck","class"=>"form-control show-tick")); ?>

</div>
           
                               <div class="col-md-3">
  <?php echo form_error('fault','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
    <label>Select Fault</label><br/>
 <?php $options = array(""=>"") ?>
  <?php foreach ($faults as $key => $value): ?>
  <?php $options[$value->faultid] = $value->faults; ?>
<?php endforeach; ?>
<?php echo form_dropdown('fault',$options,set_value('fault'),$attributes = array("data-placeholder"=>"Select Fault")); ?>


</div>





                                                  
                            </div>
                          <button type="submit" class="btn btn-success waves-effect">Create Fault</button>
                            <div class="row clearfix">
                               
                                <br/>
                                <?php if($user_role == 9 or $user_role == 5)  {

                                      ?>
                                        <?php //echo anchor('create_con/new_fault','Create New Fault'); ?>
                                          
                                           <?php
                                    }else
                                    {
                                      echo "";
                                    }
                                        
                                      ?> 
                               
                            </div>
                        </div>
               
              
            <!-- #END# Advanced Select -->
<?php echo form_close();?>
<script src="<?php echo base_url?>/adminsb/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>