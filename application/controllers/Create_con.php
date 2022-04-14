<?php



class Create_con extends CI_Controller
{

	public function create_fault()
{
       $this->db->select('*');
       $this->db->from('fleet');
   
        $data['myfleet'] = $this->db->get()->result();
        $data['faults'] = $this->get_query_model->get_faults(); 
        $data['title'] = "Create faults";    
        $data['active_page'] = 'pages/create_fault';   
        $this->load->view('template/template',$data);
  
}


            public function time_check()
            {
                $time = $this->input->post('datetime');
                $inputtime = strtotime($time);
                $timenow = time();
                
                
                if($inputtime > $timenow)
                {
                       $this->form_validation->set_message('time_check', 'The date and time   is invalid ');
                       return FALSE;
                }
                 else
                {
                        return TRUE;
                }
            }


	public function create_job($userid)
	{
		    $username = ($this->session->userdata['logged_in']['username']); 	
			$this->form_validation->set_rules('datetime','datetime','trim|required|callback_time_check');
 		    $this->form_validation->set_rules('fleet','fleet','trim|required');
 	    	$this->form_validation->set_rules('fault','fault','trim|required');
             $this->form_validation->set_rules('Jobcardno','Jobcardno','trim|is_unique[repairs.jobcardno]');
             
             


   
 		if($this->form_validation->run() == false )
 		{
			
		       
                $this->create_fault();

            	

 		}else
 		{
 			$result = $this->create_model->create_job($username);


 		if($result)
 			{
 			
 				$this->db->select('*');
       		   	$this->db->from('fleet');
       		   	$data['title'] = "Create faults";    
      			$data['myfleet'] = $this->db->get()->result();
       			$data['faults'] = $this->get_query_model->get_faults();  
       			$this->form_validation->resetpostdata();
       			$data['msg_done'] = "This Job has been Successfully Created";	  
       			$data['active_page'] = 'pages/create_fault';   
       			$this->load->view('template/template',$data);
 				
 		}else
 		{
 		
              	$this->db->select('*');
       		   	$this->db->from('fleet');      		
      			$data['myfleet'] = $this->db->get()->result();
       			$data['faults'] = $this->get_query_model->get_faults();           
                $data['msg_error'] = "The Job Has Already Been Created";	
                $data['active_page'] = 'pages/create_fault'; 
                $this->load->view('template/template',$data);
 		}
 		}
	}
	
	function edit_job($jobcardno)
    {
    	     $this->db->select('*');
      	     $this->db->from('fleet');
      	   $data['myfleet'] = $this->db->get()->result();
   	     $data['jobcard'] = $this->get_query_model->get_job_full_details($jobcardno);           
           $data['faults'] = $this->get_query_model->get_faults();
           $data['title'] = "Edit Job Card";  
           $data['active_page'] = 'pages/edit_job';         
            $this->load->view('template/template',$data);

    }
	
	function update_job($jobcardno)
	{
	    $this->form_validation->set_rules('fleet','fleet','trim|required');
 		$this->form_validation->set_rules('fault','fault','trim|required');

        //$userid = ($this->session->userdata['logged_in']['userid']);
        if($this->form_validation->run() == false)
        {
         $this->edit_job($jobcardno);
        
      
      

        }else

        {
           
             $query =$this->update_model->update_job($jobcardno);
           
             if($query)
             {
            
          $this->session->set_flashdata('msg_done','Update Succesfully Done') ;  
          redirect('main/repairs'); 
          $this->session->flashdata('msg_done');

             }else
             {
                 $this->edit_job($jobcardno);
              
             }
        }
	}
	
	function new_fault()
	{
	        $data['faults'] = $this->get_query_model->get_faults(); 
	        $data['title'] = "Create New fault";    
            $data['active_page'] = 'pages/new_fault';   
            $this->load->view('template/template',$data);
	}
	
	function create_new_fault()
	{
	     $this->form_validation->set_rules('fault','fault','trim|required');
	     
	        if($this->form_validation->run() == false)
	        {
	            $query =$this->create_model->create_new_fault();
	             
	             if($query)
             {
            
          $this->session->set_flashdata('donemsg','New Fault Succesfully Added') ;  
          redirect('create_con/create_fault'); 
          $this->session->flashdata('donemsg');

             }else
             {
               
               $this->new_fault();
             }
	            
	        }
	        else
	        {
	             
	             $this->new_fault();
	        }
	    
	}

	

}

?>