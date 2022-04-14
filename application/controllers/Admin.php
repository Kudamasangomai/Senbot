<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
  public function test()
  {
  
    	$data['total'] = $this->count_model->totalf();
   		 //$data['active_page'] = 'pages/test';  
     	 $this->load->view('pages/test',$data);
  }
  
  
}