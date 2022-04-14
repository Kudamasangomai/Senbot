<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SenBot HelpDesk </title>
    
    
    <link href="<?php echo base_url();?>/assets/login/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url();?>/assets/login/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/login/js/jquery.min.js"></script>
<link href="<?php echo base_url();?>/assets/login/css/login.css" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/mycss.css" rel="stylesheet">
<!--backdrop-filter: blur(5px)-->
</head>
<body style="background:url(img/Sabot.PNG);background-size: cover;background-repeat: no-repeat;">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div id="logreg-forms" style="background-color:transparent;">
		<?php echo form_open('auth/login');?>
		
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;color:white;font-size:30pt;"> SenBot</h1>
         
           
              <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-danger" style="border-radius:50px;">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>
                <?php 
              if($this->session->flashdata('srole')){

                            $srole = $this->session->flashdata('srole');
                          ?>
                          <div class="alert alert-success" hidden="hidden">
                          <center>  <?php //echo $srole; ?></center>
                          </div>
                          <?php

                              }
                          ?>

              <?php if(isset($login_error_msg)){

              
               echo '<div class="alert alert-danger" role="alert">'.$login_error_msg.'</div>';
               echo anchor('auth/takeover/'.$srole.'', ' TakeOver')  ;

              }?>

           <?php 
              if($this->session->flashdata('takeover')){

                            $takeover = $this->session->flashdata('takeover');
                          ?>
                          <div class="alert alert-success">
                          <center>  <?php echo $takeover; ?></center>
                          </div>
                          <?php

                              }
                          ?>
             
           
			 <?php echo form_input(array(      'name'=>'username','
										         id'=>'inputusername',
                    							'class'=>'form-control',
                    							'type'=>'username',
                    							'placeholder'=>'Username',
                    							'maxlength'=>'20',
												'required'=>'required',
												'autofocus'=>'',
											      'style'=>'border-radius:50px;'
                    						),set_value('username'));
					?>
			<br/>
   
              <?php echo form_input(array(      'name'=>'password','
										         id'=>'inputPassword',
                    							'class'=>'form-control',
                    							'type'=>'password',
                    							'placeholder'=>'Password',
                    							'maxlength'=>'20',
												'required'=>'required',
                                                'autocomplete'=>'off',
                                                'style'=>'border-radius:50px;'
                    						),set_value('password'));
					?>
                    <br/>
           

           <center> <button class="btn btn-primary" style="padding-left:20px;padding-right:20px;border-radius:10px;" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button></center>
        <!--    <center><a href="#" id="forgot_pswd">Forgot password?</a></center>-->
        
          

		<? echo form_close();?>

            <form action="/reset/password/" class="form-reset">
           
            
      
            <br>
    
            
    </div>
	<p style="text-align:center">
	<script type="text/javascript">
    
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black">By Artin</a>
    </p>
    <script src="<?php echo base_url();?>/assets/login/js/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/login/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
	</script>
</body>
</html>