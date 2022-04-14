<?php



?>
 <section class="content">
 	<div class="container-fluid">
 	    
 	      <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:white;">
                                Update Fault
                                </h2>
                            
                            </div>
                                  <br/>  <br/>  <br/>
                                                                                  <?php
 foreach ($faults as $rowfaults):
   
       $rowfaults->faultid;
?>
                     
                            <div class="row clearfix">
                            
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="faultid" readonly value="<?php echo $rowfaults->faultid ?>" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" 
                                            placeholder="<?php echo  $rowfaults->faults;?>" id="faults" value="<?php echo $rowfaults->faults ?>" />
                                        </div>
                                    </div>
                                </div><br/>
                              <button type="submit" id="butsave" class="btn btn-primary waves-effect">Update</button>
                     
                                                          </div>
                                          
                              <?php endforeach; ?>
               
                           
                        </div>
              
                    </div>
               
                </div>
            </div>
        </div>
     </div>
     
     
     
     
     
     
     
     
 <script type="text/javascript">

    
    
	$('#butsave').click( function() {
	
	var faults = $('#faults').val();

	
	 
	if(faults !== " ")
	{
	    alert('blank field');
	}else
	{
	    alert('bhoo');
	}
	
	});

</script>



















