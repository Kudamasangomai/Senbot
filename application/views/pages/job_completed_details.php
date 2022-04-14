<?php



if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
  
    $userid = ($this->session->userdata['logged_in']['userid']);
    //$sessionrole = ($this->session->userdata['logged_in']['session_role']);
       $user_role = ($this->session->userdata['logged_in']['user_role']);

} else {
   
  redirect($index_page);
}
?>
  

 <section class="content">
  <div class="container-fluid">
                        <!-- block -->
                       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <h4 style="color:black;">Job Completed Details</h4>
                        </div>
                                      
                                 
                         
<style type="text/css">
	.btn-group a{
		color: white;
	}

</style>
                                     
                                      
<?php

if (isset($job_full_details)) :     foreach ($job_full_details as $rowrepairs):


   
?>
                 <?php endforeach;?>
                 <?php else : ?>  
                 <?php  endif ; ?> 
                                      




                                     
                                   </div>
                                    <br/>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                        	

                                            <tr>

                                              <th colspan="2" style="text-align: center;">Job Completed Details / <?php echo anchor("main/repair_history/$rowrepairs->fleetno", 'Repairs History ')?> </th>
                                          <th>                 </th>
                      
                                   
                                         
                                            </tr>
                           
                                        </thead>
   
                                       <tr class="data">


<tr><td>Fleet</td><td><?php echo $rowrepairs->fleetno; ?></td></tr>
		<tr><td>Fault</td><td><?php  echo $rowrepairs->faults; ?></td></tr>
		<tr><td>Status</td><td><?php  echo $rowrepairs->status; ?></td></tr>
		<tr><td>Created By</td><td><?php  echo $rowrepairs->techcreator; ?></td></tr>
		<tr><td>Assigned Tech</td><td><?php  echo $rowrepairs->last_name; ?></td></tr>
		<tr><td>second Assigned Tech</td><td><?php  echo $rowrepairs->secondtechname; ?></td></tr>
		<tr><td>date</td><td><?php  echo date('d-M-y '.' - '.' h:i:s',$rowrepairs->datecreated ); ?></td></tr>
	
    <tr><td>Closed On</td><td><?php  echo date('d / M / Y '.' @ '.'H:i:s',$rowrepairs->daterepaired); ?></td></tr>

<tr><td>Second Assigned Tech</td><td><?php 
		
		if ($rowrepairs->status == 'completed')
		{
		echo $rowrepairs->secondtechname; echo "<br/>"; 
		echo "</td></tr><tr><td></td><td>";
		
		 //echo anchor('main/secondassign/'.$rowrepairs->jobcardno,'Re Assign');
	
		}
		else
		{
		   	echo $rowrepairs->secondtechname; echo "<br/>";
		}
		
			 echo "</td></tr>";
		 ?>
                                       
                         
                                           
                              </tr>           
                                     
               <tr><td>Work Description </td><td><?php echo $rowrepairs->repairdescription; ?></td></tr>
                                    </table>






                                </div>

                            </div>

                        </div>
        
                        <!-- /block -->
                    </div>
