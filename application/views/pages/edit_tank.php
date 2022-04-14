<?php



if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
  
    $userid = ($this->session->userdata['logged_in']['userid']);
    $user_role = ($this->session->userdata['logged_in']['user_role']);
    //$sessionrole = ($this->session->userdata['logged_in']['session_role']);
   

				  
				  

} else {
   
  redirect($index_page);
}
$date = time();
$my_date = date('d-M-Y'.':'.'H:i:s', $date);
$my_date1 = date('d-M-Y');
?>
<section class="content">
  <div class="container-fluid">
  
 	  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       <div class="header">
                         <h2 style="color:white;">Update Tank</h2>
                            </div>

                                <div class="block-content collapse in">

                                                             <?php
if (isset($error_msg))
{
  echo '<div class="alert alert-danger" role="alert"><center>'. $error_msg.'</center></div>';

}
?> 
<br/><br/><br/>
                                <div class="span12">

                                   <div class="table-toolbar">

<?php
if(isset($fleettanks)) : foreach ($fleettanks as $rowtanks) :

?>
<?php echo form_open("main/update_tanks/{$rowtanks->tankid}");?>
                                   

                                      <div class="btn-group" class="tet">

                                    
                   <label class="control-label" for="date01">Fleet Number</label>
                                      
               
                                           
                                   <?php echo form_input(array( 
                                  'name'=>'fleet','
										               id'=>'date01',
                    							'class'=>'input-xSmall datepicker',
                    							'type'=>'text',
                    							'readonly'=>'true',
                                  'placeholder'=>'Username',
                    							'value'=>$rowtanks->fleet,
												
                    						),set_value('mydate'));
					?>
                                         
                                      </div> 
                                      <div class="btn-group" class="tet">

                                    
                   <label class="control-label" for="date01">Date</label>
                                      
               
                                           
                                   <?php echo form_input(array( 
                                     'name'=>'mydate','
										                  id'=>'date01',
                    						    	'class'=>'input-xSmall datepicker',
                    						     	'type'=>'date',
                                      'placeholder'=>'Username',
                    						     	'value'=>$my_date1,
												
                    						),set_value('mydate'));
					?>
                                         
                                      </div>

                                        <div class="btn-group" class="tet">

                                    
                   <label class="control-label" for="date01">Right Tank</label>
                                      
               
                                           
                                   <?php echo form_input(array( 
                                                'name'=>'tankright','
										         id'=>'date01',
                    							'class'=>'input-xSmall',
                                                 'maxlength'=>'6',
                    							'type'=>'text',
                    							'value'=>$rowtanks->tankright,
                    							
												
                    						),set_value('tankright'));
					?>
                                         
                                      </div>
                                      <div class="btn-group" class="tet">

                                    
                   <label class="control-label" for="date01">Left Tank</label>
                                      
               
                                           
                                   <?php echo form_input(array( 
                                                'name'=>'tankleft',
                                                  'maxlength'=>'6',
                                                
                    							'class'=>'input-xSmall',
                    							'type'=>'text',
                    							'value'=>$rowtanks->tankleft,
                    							
												
                    						),set_value('tankleft'));
					?>
                                         
                                      </div>
                                      <br/>    <br/>    <br/>
                                     <center> <button type="submit" class="btn btn-primary">Update Tank</button></center>
                                 
                                     <?php echo form_error('fleet'); ?>
                                      <?php echo form_error('mydate'); ?>
                                       <?php echo form_error('tankright'); ?>
                                        <?php echo form_error('tankleft'); ?>
                         
 <?php echo form_close();?>
                                <?php endforeach;?>
			  <?php	else :                     ?>
              <?php              endif ;      ?>
                                       <hr/>
</div>
</div>
</div>

</div>
 	</div>
 </div>
<link href="<?php echo base_url()?>assets/senbot/vendors/datepicker.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url()?>assets/senbot/vendors/bootstrap-datepicker.js"></script>