<?php

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
  
    $userid = ($this->session->userdata['logged_in']['userid']);
 //   $sessionrole = ($this->session->userdata['logged_in']['session_role']);
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

     <script src="../../code/highcharts.js"></script>
<script src="../../code/modules/data.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>

 <section class="content">
  <div class="container-fluid">


                        <!-- block -->
                          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                                  <h4 style="color: white"><?php 

                                  if(isset($fleetnohist))
                                  {
                                    echo $fleetnohist." Repair History";
                                  }else

                                    {
                                      echo "no fleet selected";
                                    }


                                   ?> </h4>
                                </div>

                                           

                      

                            <div class="block-content collapse in">
                                <div class="span12">
                                 
                                   <div class="table-toolbar">

                                    

                                   <hr/>
                                    <div id="container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
 <table id="datatable" hidden="hidden" class="table table-striped" width="50%">
    <thead>
        <tr>
            <th></th>
      <th>Probes</th>
       <th>Fm gps</th>
        <th>Gt not Reporting</th>
         <th>Speed</th>
         <th>No Rpm</th>
         <th>Certficate</th>
         <th>Mix Vision</th>
          <th>Change Sdcard</th>

           
      
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Notifications</th>
             <td><?php if(isset($probe)){    echo $probe;}else{    echo "";}?></td>
      <td><?php if(isset($fmgps)){    echo $fmgps;}else{    echo "";}?></td>
       <td><?php if(isset($gt_not_reporting)){    echo $gt_not_reporting;}else{    echo "";}?></td>
            <td><?php if(isset($speed)){    echo $speed;}else{    echo "";}?></td>
       <td><?php if(isset($rpm)){    echo $rpm;}else{    echo "";}?></td>
        <td><?php if(isset($certficate)){    echo $certficate;}else{    echo "";}?></td>
         <td><?php if(isset($mixvision)){    echo $mixvision;}else{    echo "";}?></td>
         <td><?php if(isset($csdcard)){    echo $csdcard;}else{    echo "";}?></td>
        </tr>
      
    </tbody>
</table>
                                   <hr/>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <!--<th>Fleet No</th>-->
                                                <th>Fault</th>
                                                <th>Status</th>
                                                <th>Ceatedby</th>
                                                <th>Created On</th>
                                                <th>Repaired On</th>
                                                <th>Assigned Tech</th>
                                                <th colspan="2">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                      <tr>
<?php
$count = 0;
if (isset($repairs)) : foreach ($repairs as $rowrepairs):
    //foreach($records as $row){
        $count++;
        $rowrepairs->jobcardno;
?>
<!--<td><?php //echo $rowrepairs->jobcardno; ?></td>--
<td><?php //echo $rowrepairs->fleetno; ?></td>-->
<td><?php  echo $rowrepairs->faults; ?></td>
<td><?php  echo $rowrepairs->status; ?></td>
<td><?php  echo $rowrepairs->techcreator; ?></td>
<td><?php  echo date('d / M / Y '.' - '.'H:i:s',$rowrepairs->datecreated); ?></td>
<td><?php  echo date('d / M / Y '.' - '.'H:i:s',$rowrepairs->daterepaired); ?></td>
<td><?php  echo $rowrepairs->last_name; ?></td>

<td><?php 
echo anchor("main/job_completed_details/$rowrepairs->jobcardno",'View');
 //echo " / ";
// echo anchor("main/assign/$rowrepairs->jobcardno",'Assign');
  //echo " / ";
  //echo anchor("menu/assign/$rowrepairs->jobcardno",'Edit'); 
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

		 <link href="<?php echo base_url();?>assets/senbot/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/senbot/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>assets/senbot/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url();?>assets/senbot/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

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


        Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'

    },
    title: {
        text: ''//'Data extracted from a HTML table in the page and Dashboard'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        formatter: function () {
            return this.point.y + ' ' + this.series.name.toLowerCase();
        }
    }
});
        </script>

<!--<script src="<?php echo base_url();?>code/highcharts.js"></script>
<script src="<?php echo base_url();?>code/modules/data.js"></script>
<script src="<?php echo base_url();?>code/modules/exporting.js"></script>
<script src="<?php echo base_url();?>code/modules/export-data.js"></script>-->


<script>
      
    

Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'

    },
    title: {
        text: ''//'Data extracted from a HTML table in the page and Dashboard'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        formatter: function () {
            return this.point.y + ' ' + this.series.name.toLowerCase();
        }
    }
});
    </script>