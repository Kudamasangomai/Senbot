<?php

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $userid = ($this->session->userdata['logged_in']['userid']);

} else {
   echo "string";
}


?>
<style type="text/css">
  .btn-group a{
    color: white;
  }

</style>
<title>Reports</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/chosen.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('chosen/css/prism.css')?>">

<script src="<?php echo base_url('chosen/js/jquery-3.2.1.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.proto.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/chosen.jquery.min.js') ?>"></script>
<script src="<?php echo base_url('chosen/js/site.js') ?>"></script>

<div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h4 style="color:black;">End Of Day Reports</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
                                    <div class="table-toolbar">

                                    <div class="btn-group" class="tet">
                                         <a href="#" class="link"><button class="btn btn-primary"><?php echo anchor('testing/endofdayrepairs', 'End Of Day Reports')?> <i class="icon-question-sign icon-white"></i></button></a>
                                      </div> 
                                     
                         

                                     
                                      
                         
                                      

                                      
<?php
$date = time();	
$validate_date = date('d-m-y');
//$date = "%Y-%m-%d";
//echo mdate($date);
echo $validate_date ;


?>



                                  
                                   </div>
                                 </div><br/><br/><br/>
                                 
                                      <fieldset>
                                        <legend>  
                                        
                                        
<?php


if (isset($msg_done))
{
  echo '<div class="alert alert-success" role="alert"><center>'. $msg_done.'</center></div>';

}elseif(isset($msg_error))
{
   echo '<div class="alert alert-danger" role="alert"><center>'. $msg_error.'</center></div>';
}
else
{
  echo "";
}
?> </legend>
                                        <div class="control-group">
                                          
                                      
                                        <div class="control-group success">
                                          
                             <div class="controls">
                                          
     <?php echo form_open('testing/dayendrepairs');?>


<div class="span2" >
  
  


</div>
<div class="span3">
<label>From</label>
 
 

<div class="form-group">
 
  
 <input type="date" name="date_from" placeholder="select-date">     
 


</div>

</div>
<div class="span3">
     <label>To</label>
 <div class="form-group">
  <input type="date" name="date_to" placeholder="select-date"> 
  
</div>

</div>
<!--
<div class="span3">
     <label>Select status</label>
    <select class="form-control" name="status" id="sel1">
     
    <option value="pending">Pending</option>
    <option value="inprogress">Inprogress</option>
     <option value="completed">Completed</option>
   
   
  </select>
</div>-->

<div class="span9">
 <div class="control-group">
                                       <br/>
     <?php //echo form_error('comment','<p><div class="alert alert-danger" role="alert"><center>','</div></p>'); ?>
                                          <div class="controls">
                                            <!--<textarea class="input-xlarge textarea" name="comment" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>-->
                                             

                                           

                                          </div>
                                        </div>
                                        <div class="">
                                       <center>  <button type="submit" class="btn btn-primary">Download</button></center>
                                 <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                        </div>
	</div>

<?php echo form_close();?>
                                        
                                          </div>


                                          <br/><br/><br/><br/><br/><br/><br/><br/>
                                        </div>
                                        
                                      </fieldset>
                              

                                </div>





                            </div>
                        </div>
                        <!-- /block -->
                    </div>








                          