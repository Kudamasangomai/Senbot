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
                          Add New Technician

                                 
                            </h2>
                            </div>
                          </div>
                          
                                
                                                                  
   <?php echo form_open('user_settings/commit_user');?>
     
                                   <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    
      <?php echo form_error('username','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control"  name="username"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">
 
  </div>
  
                                   <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    
    <?php echo form_error('firstname','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="firstname"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">
 
  </div>
  
                                   <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    
 <?php echo form_error('lastname','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="lastname"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">

  </div>
  
 
  <div class="form-group">
    <label for="exampleInputEmail1">User Role</label>
    
    <?php echo form_error('user_role','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="user_role"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Fault here">
    <p> 3 | 5 | 9  </p>
  </div>
  
  <div class="exampleInputEmail1">Status</label>
    
     <?php echo form_error('status','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="status"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <p> 1 -> Active | 0 -> Deactivated</p>
  </div>
  
   <div class="exampleInputEmail1">Password</label>
    
     <?php echo form_error('password','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" name="password"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  
   <button type="submit" class="btn btn-primary">Update</button>
    
 
    </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </section>