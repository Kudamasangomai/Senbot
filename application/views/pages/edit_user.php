<?php



?>
<style>
    .errmsg{
        color:red;
    }
</style>
 <section class="content">
 	<div class="container-fluid">
 	

                        <!-- block -->
                 
   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">
                                Daily Task

                                 
                            </h2>
                            </div>
                          </div>
                          
                                
         <?php foreach ($userdata as $row): ?>                                                               
   <?php echo form_open('user_settings/update_user/'.$row->userid.'');?>
     
                                   <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    
     
    <input type="text" class="form-control" readonly name="username" value="<?php echo $row->username; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">
 
  </div>
  
                                   <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    
    <?php echo form_error('firstname','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="firstname" value="<?php echo $row->first_name; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">
 
  </div>
  
                                   <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    
 <?php echo form_error('lastname','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="lastname" value="<?php echo $row->last_name; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">

  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">User Role</label>
    
 <?php echo form_error('user_role','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="user_role" value="<?php echo $row->user_role; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">

  </div>
  
  <div class="form-group">Status</label>
    
     <?php echo form_error('status','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="status" value="<?php echo $row->active_status; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  
   <button type="submit" class="btn btn-primary">Update</button>
     <?php endforeach; ?>
    <?php echo form_open('create_con/create_new_fault');?>
    </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </section>