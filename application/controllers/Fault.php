<?php



class Fault extends CI_Controller 
{
    
    function edit_fault($faultid)
    {
        
         $data['faults'] = $this->get_query_model->get_s_fault($faultid); 
         $data['active_page'] = 'pages/edit_fault';
         $data['title'] = "Fault";
         $this->load->view('template/template',$data);
        
    }
    
    
}