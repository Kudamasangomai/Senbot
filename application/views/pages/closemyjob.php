<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
  
    $userid = ($this->session->userdata['logged_in']['userid']);
    $user_role = ($this->session->userdata['logged_in']['user_role']);

} else {
   
  redirect($index_page);
}
?>
<style type="text/css">
  .btn-group a{
    color: white;
  }

</style>
 <section class="content">
  <div class="container-fluid">

                  
                           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       <div class="header">
                                  <h4 style="color: black;">Closing My Job</h4>
                                </div>
                           


                                   
                                  
                                  

                                     
                                   
                         
                                     




                                     
                                                       <?php
if (isset($msg))
{
  echo '<div class="alert alert-success" role="alert"><center>'. $msg.'</center></div>';

}else
{
  
}
?>
                          </div>
                                    <br/>
                                    <table class="table table-striped">
                                        <thead>
                                        	
  <tr>
<th>Fleet no</th>
<th> Fault</th>

</tr>
</thead>
                                  

 <?php
if(isset($assign_data)) : foreach ($assign_data as $row_assign):
 {

}
  ?>

 
 
<?php echo form_open("update_con/closejob/{$row_assign->jobcardno}"); ?>
<tr>
	<td><p name='fleetno'><?php echo $row_assign->fleetno;?></p></td>
	<td><?php echo $row_assign->faults;  ?></td>
	
     


</tr>

<tr> <td colspan="2">  <div class="control-group">
                                       <br/>
     <?php echo form_error('repairdescription','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="repairdescription" placeholder="Enter text ..." style="width: 100%; height: 200px"></textarea>
                                             

                                           

                                          </div>
                                        </div></td></tr>

<tr> <td><button type="submit" class="btn btn-success">Submit</button>  </td><td></td></tr>
 <?php echo form_close(); ?>

<td></td>
<tr>
  </tr>



<?php endforeach; ?>  
   <?php else : ?>  
       <?php endif ; ?>

        	  	</table>



                                </div>

                            </div>

                        </div>
        
                        <!-- /block -->
                    </div>
