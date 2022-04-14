<?php


?>
<div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h4 style="color:black;">Create New Fault</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
                                    <div class="table-toolbar">
                               
                                        
                                        <?php echo form_open('create_con/create_new_fault');?>
                                        <div class="form-group">
    <label for="exampleInputEmail1">Enter New Fault here</label>
    
      <?php echo form_error('fault','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
    <input type="text" class="form-control" name="faults" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example :  Gt No Reporting">

  </div>
      <large id="emailHelp" class="form-text text-muted">Make sure the fault name is clear.</large> <br/><br/>
      
       <large id="emailHelp" class="form-text text-muted">Before submitting check if the fault name is not on the list below.</large> <br/><br/>
  <button type="submit" class="btn btn-primary">Submit</button>
             <?php echo form_close();?>
                                        </div>
                              
                                         </div>
                                         
                                                                                                   <div class="table-responsive">
  <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dataTable">
                  <thead>
                     <tr>
                                            
                                                <th>Fault</th>
                                           
                                                 <th>action</th>
                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                   </tfoot>
              <tbody>
                <tr>  
                    <?php
$count = 0;
if (isset($faults)) : foreach ($faults as $row):
   
   
?>   

<td><?php  echo $row->faults; ?></td>




<td>
<div class="btn-group pull-right" >
<button data-toggle="dropdown" class="btn dropdown-toggle"> <span class="caret"></span></button>
 <ul class="dropdown-menu">
<?php 
echo "<li>";
//echo anchor("main/job_full_details/$row->faultid",'View');
echo "</li>";
 
  echo "<li>";
 echo anchor("create_con/edit_fault/$row->faultid",'Edit');
  echo "</li>";
  
 


   echo "<li>";
  //echo anchor("main/delete/$row->faultid",'delete'); 
   echo "</li>";

?>
   </ul>
</div>
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