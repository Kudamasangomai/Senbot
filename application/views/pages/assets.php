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
 <link href="<?php echo base_url();?>assets/senbot/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
     <script src="<?php echo base_url();?>assets/senbot/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

 <div class="span9" id="content">
 <div class="row-fluid">

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                  <h4 style="color: black;">All Assets</h4> <?php
                                  
                               
                                  ?></div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                  


                                      <div class="btn-group pull-right">
                                  
                                      <!--  <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>-->
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href='<?= base_url() ?>export/export_csv'>Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                   <?php
if (isset($nodata))
{
  echo '<div class="alert alert-danger" role="alert"><center>'. $nodata.'</center></div>';

}
?> 


 <?php

                          if($this->session->flashdata('donemsg')){

                            $msg = $this->session->flashdata('donemsg');
                          ?>
                          <div class="alert alert-success">
                          <center>  <?php echo $msg; ?></center>
                          </div>
                          <?php

                              }
                          ?>
                          
                                  <div class="table-responsive">
  <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="dataTable">
                  <thead>
                     <tr>
                                              <th>Fleet No</th>
                                               <th>team</th>
                                                <th>Regnumber</th>
                                                <th>Country</th>
                                                <th>Type</th>
                                              
                                                 <th>action</th>
                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                   </tfoot>
              <tbody>
                <tr>
                    <?php
$count = 0;
if (isset($fleet)) : foreach ($fleet as $rowrepairs):
   
        //$rowrepairs->jobcardno;
?>   
<td><?php echo $rowrepairs->fleetno; ?></td>                   
<td><?php echo $rowrepairs->team; ?></td>
<td><?php  echo $rowrepairs->regnumber; ?></td>
<td><?php  echo $rowrepairs->country; ?></td>
<td><?php  echo $rowrepairs->type; ?></td>


<td><?php 

echo anchor("main/asset_full_details/$rowrepairs->fleetno",'View');
 

if($user_role == 9 or $user_role == 5)

{
  echo " / ";
 if($rowrepairs->status = 'In Progress')
 {
 echo anchor("main/edit_asset/$rowrepairs->fleetno",'Edit');
}else if($rowrepairs->status = 'Pending')
{
  echo "string";
}
  echo " / ";  
  echo anchor("main/delete_asset/$rowrepairs->fleetno",'delete'); 
}else
{
  echo "";
}
?></td>

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

                         
                  
                        <!-- /block -->
                    </div>

		


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
        </script>
        
