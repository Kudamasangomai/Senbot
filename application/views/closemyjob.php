 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>.</h2>
            </div>

 
    
            <div class="row clearfix">
         
            </div>
               <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           header
                            </div>
                                           <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Job id</th>
                                            <th>Job Name</th>
                                  
                                        </tr>
                                    </thead>
                                 
                                    <tbody>


                                                        <?php

if (isset($c_my_jobs)) : foreach ($c_my_jobs as $rowjobs):
?>
<?php echo form_open("main/closejob/{$rowjobs->job_id}"); ?>
                                        <tr>
                                            <td><?php echo $rowjobs->job_id; ?></td>
                                             <td><?php echo $rowjobs->jobname; ?></td>
                                                                                   
                                     
                                              

                                        </tr>
                                        <tr>
                                             <div class="controls">
                                            <textarea class="input-xlarge textarea" name="Jobdescription" placeholder="Enter text ..." style="width: 900px; height: 200px"></textarea>
                                             

                                           

                                          </div>
                                            </tr>
                                            <tr> <td><button type="submit" class="btn btn-success">Submit</button>  </td><td></td></tr>
                                             <?php echo form_close(); ?>
                                      <?php endforeach; ?>
                   <?php  else : ?>
                              <?php  endif ; ?>  
                                      
                                    </tbody>
                                </table>

                       </div> </div> </div> </div>
            
            </div>
            </section>