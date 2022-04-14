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
<title>Most Repaired</title>
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>adminsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
 <section class="content">
  <div class="container-fluid">
  

   <!-- Exportable Table -->
                   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">
                              Most Repaired Trucks

                                 
                            </h2>

                            <?php
                            if(isset($msg_done))
                            {

                              echo $msg_done;
                            }
                            ?>
                              
                           
                        </div>
                        <h4>
                   


                          
                            </h4>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="table">
                                    <thead>
                                        <tr>
                                       
                                               <th>Fleet No</th>
                                                <th>Total</th>
                                                <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                               <th>Fleet No</th>
                                                <th>Total</th>
                                               <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                                        <?php

if (isset($most_repaired)) : foreach ($most_repaired as $rowrepairs):
   
    
?>
                                        <tr>
                                                           
<td><?php echo $rowrepairs->fleetno; ?></td>
<td><?php  echo $rowrepairs->total; ?></td>




<td>
<?php echo anchor("main/repair_history/$rowrepairs->fleetno",'View');?>
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
