<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_job extends CI_Controller {
    
    
    
    function sendmail()
    {
        $msg ="we have unclosed jobs";
        $this->load->model();
        $query = $this->db->where('status', 'inprogress')->get('repairs');
		//return $query->num_rows();
		
		if($query->numrows() > 1)
		{
		  mail("kudam775@gmail.com","Senbot HElpdesk",$msg);
		}
        
    }
    
    
    
}