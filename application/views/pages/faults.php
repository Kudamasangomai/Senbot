<?php
 

            $date = time();
            $my_date = date('Y-m-d',$date);
            date_default_timezone_set("Africa/Cairo");
            $time =  Date('Y-m-d h:i:s');
            $userid = ($this->session->userdata['logged_in']['userid']);
            $user_role = ($this->session->userdata['logged_in']['user_role']);
		
			

?>
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>adminsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <title>  </title>
 <section class="content">
 	<div class="container-fluid">
 	

   <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">
                               Faults

                                 
                            </h2>

                            <?php
                            if(isset($msg_done))
                            {

                              echo $msg_done;
                            }
                            ?>
                              
                           
                        </div>
                        <h4>
                          <?php

                          if($this->session->flashdata('donemsg')){

                            $msg = $this->session->flashdata('donemsg');
                          ?>
                          <div class=" alert alert-success">
                            <?php echo $msg; ?>
                          </div>
                          <?php

                              }
                          ?>
   

 <?php

                          if($this->session->flashdata('msg_done')){

                            $msg = $this->session->flashdata('msg_done');
                          ?>
                          <div class="alert alert-success">
                          <center>  <?php echo $msg; ?></center>
                          </div>
                          <?php

                              }else
                              {
                                    $msg = $this->session->flashdata('msg_error');
                              }
                          ?>
                         <!-- <div class="alert alert-danger">
                          <center>  <?php echo $msg; ?></center>
                          </div>-->
                          
                            </h4>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="table">
                                    <thead>
                                        <tr>
                                                <th>Fault Id</th>
                                               <th>Fault Name</th>
                                              
                                                 <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                              <th>Fault Id</th>
                                               <th>Fault Name</th>
                                              
                                                 <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                                        <?php

if (isset($faults)) : foreach ($faults as $rowfaults):
   
       $rowfaults->faultid;
?>
                                        <tr id="<?php echo $rowfaults->faultid; ?>" >
                                            <td><?php echo $rowfaults->faultid; ?></td>                   
<td><?php echo $rowfaults->faults; ?></td>




<td>
<div class="btn-group pull-right" >
<button data-toggle="dropdown" class="btn dropdown-toggle"> <span class="caret"></span></button>
 <ul class="dropdown-menu">
<?php 
echo "<li>";
//echo anchor("main/job_full_details/$rowfaults->faultid",'View');
echo "</li>";
 echo "<li>";




  
 echo "</li>";
  echo "<li>";
 echo anchor("fault/edit_fault/$rowfaults->faultid",'Edit');
  echo "</li>";
  
  




   echo "<li>";
   ?>
 
    <button type="submit" class="btn btn-danger remove"> Delete </button>

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


</div>
 </section>


    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this record!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            // url: '/product-list/'+id,   
             url: '<?php echo site_url('main/delete/') ?>'+id,     
             type: 'DELETE',        
             error: function() {
                alert('Sorry dear Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");


  


             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
    
</script>
 
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