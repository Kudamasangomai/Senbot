  <section class="content">

     <div class="container-fluid">
            <div class="block-header">
          <h2>Create A job Card</h2>
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
                        <?php echo form_open('main/create_job_c') ;?>
                            <form>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              
                                                       <?php     
                                    echo form_input(array( 
                                    'name'=>'customername',
                                   'class'=>'form-control',
                    				'type'=>'text',                    					
                                    'placeholder'=>'customername',                    				
									),set_value('customername'));
					?>  
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                        <div class="form-group">
                                            <div class="form-line">

                              
                                              
                                                         <?php     
                                    echo form_input(array( 
                                    'name'=>'location',
                                   'class'=>'form-control',
                    				'type'=>'text',                    					
                                    'placeholder'=>'location',                    				
									),set_value('location'));
					?>  
                             
                 
                       
                                              
                                                
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              

            <?php     
                                    echo form_input(array( 
                                    'name'=>'jobtype',
                                    'id'=>'date01',
                    				'class'=>'form-control',
                    				'type'=>'text',                    					
                                    'placeholder'=>'Job type',                    				
									),set_value('jobtype'));
					?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              

            <?php     
                                    echo form_input(array( 
                                    'name'=>'contact_details',
                                    'id'=>'date01',
                    				'class'=>'form-control',
                    				'type'=>'text',    
                                    'maxlength'=>'12',                					
                                    'placeholder'=>'Phone_number',                    				
									),set_value('contact_details'));
					?>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
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
















</section>