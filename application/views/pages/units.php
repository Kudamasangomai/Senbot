<?php
 $date = time();
$my_date = date('Y-m-d',$date);

 date_default_timezone_set("Africa/Cairo");
            $time =  Date('Y-m-d h:i:s');
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
  
  #dataTable_info{
    
    visibility:hidden;
}
label{
     /*visibility:hidden;*/
}

#menu li{
    color:red;
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
                                  <h4 style="color: black;">All Tracking Units </h4></div>
                            </div>
                       

                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                        <br/>    <br/>

                                                   

      
                                      
                                      
                                   
                                              
                                                           


                                   
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
                                              <th>Unit Id</th>
                                               <th>Serial Number</th>
                                                <th>Asset Type</th>
                                                <th>Status</th>
                                                <th>Installed On</th>
                                              
                                                 <th>action</th>
                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                   </tfoot>
              <tbody>
                <tr>  
                    <?php
$count = 0;
if (isset($units)) : foreach ($units as $rowunit):
   
        //$rowunit->jobcardno;
?>   
<td><?php echo 'leo' .$rowunit->uid; ?></td>                   
<td><?php  echo $rowunit->serialno; ?></td>
<td><?php echo $rowunit->assettype; ?></td>
<td><?php  echo $rowunit->status; ?></td>
<td><?php  echo $rowunit->truck; ?></td>
<td>
<div class="btn-group pull-right" >
<button data-toggle="dropdown" class="btn dropdown-toggle"> <span class="caret"></span></button>
 <ul class="dropdown-menu">
<?php 
echo "<li>";
echo anchor("main/job_full_details/$rowunit->uid",'View');
echo "</li>";
 echo "<li>";
if($user_role == 9 or $user_role == 5)

{
 if($rowrepairs->status = 'In Progress')
 {
 echo anchor("main/assign/$rowunit->uid",'Assign');
  
 echo "</li>";
  echo "<li>";
 echo anchor("create_con/edit_job/$rowunit->uid",'Edit');
  echo "</li>";
  
  
 
}else if($rowrepairs->status = 'Pending')
{
  echo "string";
 
}

   echo "<li>";
  echo anchor("main/delete/$rowunit->uid",'delete'); 
   echo "</li>";
}else
{
  echo "";
}
?>
   </ul>
</div>
</td>
  
</tr>
                  
                         
    <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>               
   <tr>
                                              <th>Unit Id</th>
                                               <th>Serial Number</th>
                                                <th>Asset Type</th>
                                                <th>Status</th>
                                                <th>Installed On</th>
                                              
                                                 <th>action</th>
                    </tr>
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