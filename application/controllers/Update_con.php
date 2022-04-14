<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_con extends CI_Controller {


function closejob($jobcardno)
		{
		
		$userid = ($this->session->userdata['logged_in']['userid']);
		$date = time();	
		$my_repair_date = date('Y-m-d',$date);
        //$validate_date = date('d-M-Y', $date);
           
         		$this->form_validation->set_rules('repairdescription','repairdescription','trim|required');

         		if($this->form_validation->run() == false)
         		{
         			$data['assign_data'] = $this->get_query_model->get_job_full_details();
                    $data['title'] = "Close My Job";
                    $data['active_page'] = 'pages/closemyjob';        
                    $this->load->view('template/template',$data);
                    
         		}else
         		{
         			 $data =array(
                    
                    'jobcardno'=> $jobcardno ,
					'status'=> 'completed',
					'daterepaired' => $date,
					'my_repair_date' => $my_repair_date,
					'repairdescription'=>$this->input->post('repairdescription'),
					'closedby'=> $userid
                   
                  
                   );
                   
                   $this->update_model->close_job($data);
				   

				   redirect('main/completed');

         		}
               
                  
	
      		
		 
		}




}