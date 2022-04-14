<?php


if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $userid = ($this->session->userdata['logged_in']['userid']);
        $user_role = ($this->session->userdata['logged_in']['user_role']);

} else {
   echo "string";
}

$date = time();
$my_date = date('d-M-Y'.':'.'H:i:s', $date);
$my_date1 = date('d-M-Y');




?>

	
<style type="text/css">
  .btn-group a{
    color: white;
  }

</style>
<!--
<link href="<?php echo base_url();?>assets/senbot/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url();?>assets/senbot/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/chosen.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/prism.css')?>">

<script src="<?php echo base_url('chosen/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.proto.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/site.js') ?>"></script>



 <section class="content">
  <div class="container-fluid">

                        <!-- block -->
                         <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">Tanks</h2>
                        </div>
                        
                                   <div class="table-toolbar">
                                    <br/>     <br/>

  <?php echo form_open('main/add_tanks');?>
  
                                    <div class="col-md-3">
                                          <label>Select Fleet</label>
              
                   <?php echo form_error('fleet','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                 
                                                 
  <?php $options = array(""=>"") ?>
  <?php foreach ($myfleet as $key => $value): ?>
  <?php $options[$value->fleetno] = $value->fleetno; ?>
<?php endforeach; ?>
<?php echo form_dropdown('fleet',$options,set_value('fleet'),$attributes = array("data-placeholder"=>"Select Truck","class"=>"form-control show-tick")); ?>
                                      </div>  
                                      <div class="col-md-3" >

                                    
                   <label class="control-label" for="date01">Date </label>
          
           <?php echo form_error('mydate','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                           
                                   <?php echo form_input(array( 
                                                'name'=>'mydate',
                                                'id'=>'date01',
                    				'class'=>'form-control show-tick',
                    						'type'=>'date',
                                'placeholder'=>'Username',
                    							'value'=>$my_date1,
                              
												
                    						),set_value('mydate'));
					?>
                                         
                                      </div>

                                        <div class="col-md-3">

                                    
                   <label class="control-label" for="date01">Right Tank</label>
  <?php echo form_error('tankright','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                           
                                   <?php echo form_input(array( 
                                                'name'=>'tankright',
                                                'id'=>'date01',                    				                     
                            'class'=>'form-control show-tick',
                             'maxlength'=>'6',
                    							'type'=>'text',
                    							'placeholder'=>'H125R',
                    							
												
                    						),set_value('tankright'));
					?>
                                         
                                      </div>
                                      <div class="col-md-3">

                                    
                   <label class="control-label" for="date01">Left Tank</label>
                                      
               
    
                        <?php echo form_error('tankleft','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                   <?php echo form_input(array( 
                                                'name'=>'tankleft',
                                                  'maxlength'=>'6',
                                                
                    							                     'id'=>'date01',
                            'class'=>'form-control show-tick',
                    							'type'=>'text',
                    							'placeholder'=>'H125L',
                    							
												
                    						),set_value('tankleft'));
					?>
                                         
                                      </div>
                                      <br/>    <br/> <br/><br/> <br/>
      <center> <button type="submit" class="btn btn-primary">Add Tanks</button></center>

                               
                                  
                                   
                                 
                         
 <?php echo form_close();?>
                                     
                                       <hr/>
                         



                                                       <?php

                          if($this->session->flashdata('error_msg')){

                            $msg = $this->session->flashdata('error_msg');
                          ?>
                          <div class="alert alert-success">
                          <center>  <?php echo $msg; ?></center>
                          </div>
                          <?php

                              }
                          ?>
                                                           
 <?php echo form_error('repair','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>

                                  
                                   </div>

                                   <?php
//if (isset($nodata))
//{
//  echo '<div class="alert alert-danger" role="alert"><center>'. $nodata.'</center></div>';

//}
?> 
                                    <div class="body">
                                <div class="table-responsive">
                              <table  class="table table-bordered table-striped table-hover dataTable js-exportable">
                  <thead>
                     <tr>
                                              <th>Fleet No</th>
                                                <th>Date Allocated</th>
                                                <th>Tank Right </th>
                                                <th>Tank left</th>
                                                <th>Date Captured</th>
                                                <th>Captured By</th>
                                                  <th>Action</th>
                                               
                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                    <tr>
                                              <th>Fleet No</th>
                                                <th>Date Allocated</th>
                                                <th>Tank Right </th>
                                                <th>Tank left</th>
                                                <th>Date Captured</th>
                                                <th>Captured By</th>
                                                  <th>Action</th>
                                               
                    </tr>
                   </tfoot>
              <tbody>
                <tr>
                                       <?php
if (isset($tanks)) : foreach ($tanks as $rowtanks):
?>                    
<td><?php   echo $rowtanks->fleet; ?></td>
<td><?php   echo $rowtanks->dateallocated; ?></td>
<td><?php  echo $rowtanks->tankright; ?></td>
<td><?php   echo $rowtanks->tankleft; ?></td>
<td><?php   echo $rowtanks->datecaptured; ?></td>
<td><?php   echo $rowtanks->last_name; ?></td>
<td>        <div class="btn-group pull-right" >
<button data-toggle="dropdown" class="btn dropdown-toggle"> <span class="caret"></span></button>
 <ul class="dropdown-menu">
<?php 

 echo "<li>";
if($user_role == 9 or $user_role == 5)

{
echo anchor("main/fleet_tanks/$rowtanks->fleet",'View');
            
  
 echo "</li>";
 echo "<li>";
echo anchor("main/edit_tank/$rowtanks->tankid",'Edit');
  
 echo "</li>";
 echo "<li>";
         // echo anchor("main/change_tank/$rowtanks->fleet",'Change tanks');
  echo "</li>";
  echo "<li>";
          echo anchor("main/delete_tank/$rowtanks->tankid",'delete');
  echo "</li>";
 
}else
{
  echo "";
}
?>
   </ul>
</div></td>
</tr>
                      
                         
    <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>               
     
                  </tbody>
                     </table>
                           </div>
</div>




<ul class="links">
<li>                              <p class="pagination">   
<?php if(isset($links)){

echo $links;

}else{
    echo "pagination not working";
} ?></li>
</ul>

                                </div>

                            </div>

                        </div>
                        <style type="text/css">
  .links li{
  	display: inline;
  	text-align: center;
  	 font-size: 12pt;
  	padding: 10px;
  	background :white;
  }
  </style>
                        <!-- /block -->
          


	
	
<link href="<?php echo base_url()?>assets/senbot/vendors/datepicker.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url()?>assets/senbot/vendors/bootstrap-datepicker.js"></script>
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
    <script src="<?php echo base_url();?>adminsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
 <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>adminsb/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>adminsb/js/pages/ui/dialogs.js"></script>

<!--
  <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>-->