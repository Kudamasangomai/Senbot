<?php

?>
<style type="text/css">
  .btn-group a{
    color: white;
  }

</style>
<div class="span9" id="content">
 <div class="row-fluid">

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h4 style="color:black;">Assign Tech</h4></div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">

                                     <div class="btn-group" class="tet">
                                         <a href="#" class="link"><button class="btn btn-primary"><?php echo anchor('main/Repairs', 'Repairs')?> <i class="icon-question-sign icon-white"></i></button></a>
                                      </div> 
                                      <div class="btn-group">
                                         <a href=""><button class="btn btn-primary"><?php echo anchor('create_con/create_fault', 'Create Job')?> <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                         

                                 

                                     
                                      <div class="btn-group" class="tet">
                                         <a href="#" class="link"><button class="btn btn-primary"><?php echo anchor('main/Pending', 'Pending')?> <i class="icon-question-sign icon-white"></i></button></a>
                                      </div>  
                         
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-primary"><?php echo anchor('main/inprogress', 'inprogress')?> <i class="icon-play icon-white"></i></button></a>
                                      </div>

                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-primary"><?php echo anchor('main/Completed', 'Completed')?><i class="icon-ok-circle icon-white"></i></button></a>
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
<th> Assign To</th>
</tr>
</thead>
                                  

 <?php
if(isset($assign_data)) : foreach ($assign_data as $row_assign):
 {

}
  ?>

 
 
<?php echo form_open("main/assigntosecond/{$row_assign->jobcardno}"); ?>
<tr>
	<td><p name='fleetno'><?php echo $row_assign->fleetno;?></p></td>
	<td><?php echo $row_assign->faults;  ?></td>
	<td> <select class="form-control" id="exampleInputPassword1" name="assignto">
   				<option> </option>
         <?php
         if (isset($gettech)) : foreach ($gettech as $rowp):
         ?>
           
        <option name="" value="<?php echo $rowp->userid; ?>">
        <?php 
         echo $rowp->last_name; ?>
           
         </option>

       <?php endforeach; ?>  
       <?php else : ?>  
       <?php endif ; ?>
      </select>
     </td>
     
<td> <button type="submit" class="btn btn-success">Submit</button>  </td>
 <?php echo form_close(); ?>
</tr>
<td></td>
<td colspan="2"><?php  echo form_error('assignto','<div class="alert alert-danger">', '</div>');?></td>
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
