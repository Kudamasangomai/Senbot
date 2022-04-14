<?php

 $date = time();
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $userid = ($this->session->userdata['logged_in']['userid']);
     $user_role = ($this->session->userdata['logged_in']['user_role']);

} else {
   
  redirect($index_page);
}

?>
<link href="<?php echo base_url();?>adminsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>adminsb/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    
    
<section class="content">
    <div class="container-fluid">
 	   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">
                              Technicians 
                                </h2>
                                <h5 style="color:white;">
                                       <?php echo anchor("user_settings/add_user", 'Add Technician ')?>
                                </h5>
                            <p style="color:white;">
                           
                                </p>
             </div>              
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
                                       </div>
                                        <div class="body">
     <div class="table-responsive">
   <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="table">
                  <thead>
                     <tr>
                                              <th>First Name</th>
                                               <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Active</th>
                                                  <th>Roles</th>
                                                <th>Last Logged In</th>
                                          
                                                <th>Action</th>
                                             

                    </tr>
                                             
                                              
  
                  </thead>
                  <tfoot>
                   </tfoot>
              <tbody>
                <tr>
                    <?php
$count = 0;
if (isset($users)) : foreach ($users as $rowusers):
   
        
?>   
<td><?php echo $rowusers->first_name; ?></td>                   
<td><?php echo $rowusers->last_name; ?></td>
<td><?php  echo $rowusers->username; ?></td>
<td><?php



if ( $rowusers->active_status == 1)
{
    echo "Active";
}else
{
     echo "Deactivated";
}

?>
</td>
<td><?php  echo $rowusers->user_role; ?></td>
<td>
    <?php  
    if($rowusers->last_logged_in != '')
    {
        echo date('d / M / Y '.' - '.'H:i:s',$rowusers->last_logged_in); 
    }else
    {
        echo '';
    }
    
    ?>


    <td>
    <div class="btn-group pull-right" >
    <button data-toggle="dropdown" class="btn dropdown-toggle"> <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <?php
echo "<li>";
echo anchor("user_settings/view_user/$rowusers->userid",'View');
echo "</li>";
    
echo "<li>";
 if($user_role == 9)
 {
    echo "<li>";
    echo anchor("user_settings/edit_user/$rowusers->userid",'Edit');
    echo "</li>";
    echo "<li>";
    echo anchor("user_settings/delete_user/$rowusers->userid",'Delete');
    echo "</li>";
 }



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
   
   
             url: '<?php echo site_url('main/delete/') ?>'+id,     
             type: 'DELETE',        
             error: function() {
                alert('Sorry dear Something is wrong');
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your Record has been deleted.", "success");


  


             }
          });
        } else {
          swal("Cancelled", "Your Record is safe :)", "error");
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