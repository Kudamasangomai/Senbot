<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function index()
  {
    $this->load->view('login');
   
  }


		public function login()
	{
	
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

		
		 if ($this->form_validation->run() == FALSE) {

          
              redirect($index_page);
             
         
        } 
        else
         {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'status'=> 1
            );
            $result = $this->login_model->user_login($data);

            if ($result == TRUE) {


             

                $username = $this->input->post('username');
                $result = $this->login_model->read_user_information($username);
   
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->username,                     
                        'userid' =>$result[0]->userid, 
                         'first_name' =>$result[0]->first_name,
                        'last_name'=>$result[0]->last_name,
                        'user_role'=>$result[0]->user_role,
                          

                   
                    );	
                   
                    $this->session->set_userdata('logged_in', $session_data); 
                     redirect('main/dashboard'); 
                    
                }
            }
            
            else
             {
           
              // $data['errmsg'] = 'Invalid Username or Password';     
               $this->session->set_flashdata('message', 'Invalid Username or Password ');
             redirect($index_page);
             
         
            }
        }
	}


 function logout() {

        $sess_array = array(
            'user_id'=>''
        );
         $this->session->unset_userdata('logged_in', $sess_array);
         redirect($index_page);

  

    }



   


}