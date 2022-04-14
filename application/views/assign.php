   <style type="text/css">

    .myerror{
        color:red;
    }
    </style>
 <section class="content">

     <div class="container-fluid">
            <div class="block-header">
          <h2>Assign A User</h2>
            </div>

<br/>
                  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       

                                   <!-- Inline Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <br/>
                            <h2>
   

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
                          
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                       
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <?php echo form_open('main/assign_job') ;?>
                            <form>
                                <div class="row clearfix">
                           
                         
     
                            
                              
                                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              

            <?php   
               
                                    echo form_input(array( 
                                    'name'=>'jobid',
                                    'id'=>'date01',
                    				'class'=>'form-control',
                    				'type'=>'text',
                                     'readonly'=>'true', 
                                    'value'=>$job_id,                  					
                                                     				
									),set_value($job_id,));
					?>
                                            </div>
                                        </div>
                                    </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            
                                    <select class="form-control show-tic" name='user_assign'>
                                  <?php if (isset($get_users)) : foreach ($get_users as $rowu): ?>
                                        <option value="<?php echo $rowu->user_emp_id ?>"><?php echo $rowu->lname ?></option>
                                      
                                           <?php endforeach; ?>  
       <?php else : ?>  
       <?php endif ; ?>
                                    </select>
</div>
                            
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                     
                                        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Submit</button>
                                    </div>
                                    
                                </div>
                                    <p class="myerror">  <?php echo form_error('location'); ?></p>
                                        <p class="myerror">  <?php echo form_error('customername'); ?></p>
                                            <p class="myerror">  <?php echo form_error('jobtype'); ?></p>
                                             <p class="myerror">  <?php echo form_error('contact_details'); ?></p>
                            </form>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>


   </div> 
     </div>  
    </div>

   

 
       </body>
           <script src="<?php echo base_url();?>adminsb/plugins/jquery/jquery.min.js"></script>  
       <script src="<?php echo base_url();?>adminsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>















</section>