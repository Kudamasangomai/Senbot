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
                                  <h4 style="color:black;">Pending Repairs</h4>
                                </div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">

                                    <div class="btn-group" class="tet">
                                         <a href="#" class="link"><button class="btn btn-primary"><?php echo anchor('main/Repairs', 'Repairs')?> <i class="icon-question-sign icon-white"></i></button></a>
                                      </div> 
                                     <?php if($user_role == 9 or $user_role == 5)  {

                                      ?>
                                      <div class="btn-group">
                                         <a href=""><button class="btn btn-primary">


                                          <?php echo anchor('create_con/create_fault', 'Create Job')?> 


                                          <i class="icon-plus icon-white"></i>

                                        </button></a>
                                      </div>
                                      <?php
                                    }else
                                    {
                                      echo "";
                                    }
                                        
                                      ?>

                                     
                                      <div class="btn-group" class="tet">
                                         <a href="#" class="link"><button class="btn btn-primary"><?php echo anchor('main/pending', 'Pending')?> <i class="icon-plus icon-white"></i></button></a>
                                      </div>  
                         
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-primary"><?php echo anchor('main/inprogress', 'inprogress')?> <i class="icon-plus icon-white"></i></button></a>
                                      </div>

                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-primary"><?php echo anchor('main/Completed', 'Completed')?><i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-primary"><?php //echo anchor('main/mostrepaired', 'Most Repaired trucks')?><i class="icon-plus icon-white"></i></button></a>
                                      </div>




                                      <!-- <div class="btn-group pull-right">
                                  
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href='<?= base_url() ?>index.php/export/export_csv'>Export to Excel</a></li>
                                            <li><?php //echo anchor('export/export_csv', 'inprogress')?></li>
                                         </ul>
                                      </div>-->
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                               <th>Jobcard No</th>
                                                <th>Fleet No</th>
                                                <th>Fault</th>
                                                <th>Status</th>
                                                <th>Ceatedby</th>
                                                <th>Created On</th>
                                                <th>Assigned Tech</th>
                                                <th colspan="2">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                      <tr>
<?php
//$count = 0;
if (isset($repairs)) : foreach ($repairs as $rowrepairs):
    //foreach($records as $row){
     //   $count++;
        $rowrepairs->jobcardno;
?>
<td><?php echo 'CAR' .$rowrepairs->jobcardno; ?></td> 
<td><?php echo $rowrepairs->fleetno; ?></td>
<td><?php  echo $rowrepairs->faults; ?></td>
<td><?php  echo $rowrepairs->status; ?></td>
<td><?php  echo $rowrepairs->techcreator; ?></td>
<td><?php  echo date('d / M / Y '.' - '.'H:i:s',$rowrepairs->datecreated); ?></td>
<td><?php  echo $rowrepairs->last_name; ?></td>

<td><?php 
echo anchor("main/job_full_details/$rowrepairs->jobcardno",'View');
if($user_role == 9 or $user_role == 5)

{
 echo " / ";
 echo anchor("main/assign/$rowrepairs->jobcardno",'Assign');
  //echo " / ";
 // echo anchor("menu/assign/$rowrepairs->jobcardno",'Edit'); 
}else
{
  echo "";
}
?></td>

</tr>
                                       
                   <?php endforeach; ?>
<?php else : ?>  
   <center><?php //echo anchor('student/search_page','go back'); ?></center>

<?php  endif ; ?>                      
                                           
                                         
                                     
                                      
                                        </tbody>
                                    </table>





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
                    </div>


 <link href="<?php ///echo base_url();?>assets/senbot/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php //echo base_url();?>assets/senbot/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php //echo base_url();?>assets/senbot/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php //echo base_url();?>assets/senbot/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

            <script src="<?php echo base_url();?>assets/senbot/vendors/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/bootstrap/js/bootstrap.min.js"></script>

         <script src="<?php echo base_url();?>assets/senbot/vendors/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/bootstrap-datepicker.js"></script>

          <script src="<?php echo base_url();?>assets/senbot/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?php echo base_url();?>assets/senbot/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

         <script src="<?php echo base_url();?>assets/senbot/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

         <script type="text/javascript" src="<?php echo base_url();?>assets/senbot/vendors/jquery-validation/dist/jquery.validate.min.js"></script>

         <script src="<?php echo base_url();?>assets/senbotassets/form-validation.js"></script>
        
	<script src="<?php echo base_url();?>assets/senbotassets/scripts.js"></script>
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
