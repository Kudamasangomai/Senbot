<?php



?>
 <style>
  table  tr td{
    border: none !important;
   }
   
   .errmsg
   {
       color:red;
   }
</style>
 <div class="span9" id="content">
 <div class="row-fluid">
     
      <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                  <h4 style="color: black;">Personal-Details </h4></div>
                                 


 
                            </div>
                            
                           
                           <table class="table" border="0">
  <thead>
    <tr>
       
      <th scope="col"></th>
      <th scope="col"></th>
       
    
    </tr>
  </thead>
  <tbody>
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
 <?php foreach ($userdata as $row): ?>
 
 <?php echo form_open('user_settings/update'); ?>


      <tr>
          <td>
            <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" readonly name="username"  value="<?php echo $row->username; ?>" aria-describedby="emailHelp" placeholder="Username">
  </div>   
          </td>
      </tr>
    <tr>
    
    
      <td>
    <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <?php echo form_error('firstname','<p class="errmsg">','</p>'); ?>
    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="<?php echo $row->first_name; ?>"  aria-describedby="emailHelp" placeholder="First Name">
  </div>
  </td>
      <td>
          <div class="form-group">
              <?php echo form_error('lastname','<p class="errmsg">','</p>'); ?>
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" value="<?php echo $row->last_name; ?>" aria-describedby="emailHelp" placeholder="Last Name">
  </div> 
      </td>
    </tr>
    
    <tr>
    
    
      <td>
    <div class="form-group">
         <?php echo form_error('email','<p class="errmsg">','</p>'); ?>
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $row->email; ?>" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  </td>
      <td>
          <div class="form-group">
              <?php echo form_error('cellno','<p class="errmsg">','</p>'); ?>
    <label for="exampleInputEmail1">Mobile number</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="cellno" value="<?php echo $row->cellno; ?>" aria-describedby="emailHelp" placeholder="Mobile number">
  </div> 
      </td>
    </tr>
    <tr>
    
    
      <td>
    <div class="form-group">
        <?php echo form_error('password','<p class="errmsg">','</p>'); ?>
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password" value="<?php echo $row->password; ?>" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  </td>
      <td>
          <div class="form-group">
              <?php echo form_error('cpassword','<p class="errmsg">','</p>'); ?>
    <label for="exampleInputEmail1">Repeat Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="cpassword"  value="<?php echo $row->password; ?>" aria-describedby="emailHelp" placeholder="Enter email">
  </div> 
      </td>
    </tr>

               
                       <?php endforeach; ?>
   
  </tbody>
 
</table>

<center>
 <button class="btn btn-success" type="submit"><i class="fas fa-sign-in-alt"></i>Update</button>
 </center>
 <br/> <br/>
 <?php echo form_close(); ?> 

                            
                    </div>
     
     </div>
     </div>