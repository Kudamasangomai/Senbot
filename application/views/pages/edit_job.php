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


  .card{


 height: 100vh;
  }
h2{
  color: red;
}

</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/chosen.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/prism.css')?>">

<script src="<?php echo base_url('chosen/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.proto.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/site.js') ?>"></script>

<section class="content">
  <div class="container-fluid">
  <div class="block-header">
        

                          
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                             <h2 style="color:white;">
                            Update Fault


                            </h2>
                          </div>



                            <div class="block-content collapse in">
                               



                                      <fieldset>
                                          <div class="table-responsive">
  <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dataTable">
                  <thead>
                     <tr>
                                              <th>Jobcard No</th>
                                               <th>Fleet No</th>
                                                <th>Fault</th>
                                                <th>Status</th>
                                                <th>Ceatedby</th>
                                                <th >Created On</th>                                              
                                                <th>Assigned Tech</th>
                                            
                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                   </tfoot>
              <tbody>
                <tr>
                    <?php
$count = 0;
if (isset($jobcard)) : foreach ($jobcard as $rowrepairs):
   
        $rowrepairs->jobcardno;
?>   
<td><?php echo 'CAR' .$rowrepairs->jobcardno; ?></td>                  
<td><?php echo $rowrepairs->fleetno; ?></td>
<td><?php  echo $rowrepairs->faults; ?></td>
<td><?php  echo $rowrepairs->status; ?></td>
<td><?php  echo $rowrepairs->techcreator; ?></td>
<td><?php  echo date('d / M / Y '.' - '.'H:i:s',$rowrepairs->datecreated); ?></td>
<td style="text-align: center;"><?php  echo $rowrepairs->last_name; ?></td>



</tr>
                      
                         
    <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>               
     
                  </tbody>
                     </table>
                           </div>
                                        <legend>                <?php


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
?> </legend>
                                        <div class="control-group">
                                          
                                      
                                        <div class="control-group success">
                                          
                             <div class="controls">
                                          
     <?php echo form_open('create_con/update_job/'.$rowrepairs->jobcardno.'');?>


<div class="col-md-3" hidden="hidden">
  
  


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
	  <label>Select Fault</label>
 <?php $options = array(""=>"") ?>
  <?php foreach ($faults as $key => $value): ?>
  <?php $options[$value->faultid] = $value->faults; ?>
<?php endforeach; ?>
<?php echo form_dropdown('fault',$options,set_value('fault'),$attributes = array("data-placeholder"=>"Select Fault","class"=>"form-control show-tick")); ?>


</div>
<div class="span3">
</div>

<div class="span9">
 <div class="control-group">
                                       <br/>
     
                                          <div class="controls">
                                        
                                             

                                           

                                          </div>
                                        </div>
                                        <div class="">
                                        <center>  <button type="submit" class="btn btn-primary">Save changes</button></center>
                         
                                        </div>
	</div>

<?php echo form_close();?>
                                        
                                          </div>


                                        
                                        </div>
                                        
                                      </fieldset>
                              

                                </div>





                            </div>
                        </div>
                        <!-- /block -->
                    </div>