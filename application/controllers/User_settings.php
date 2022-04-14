<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_settings extends CI_Controller {
    
    
    
    public function settings()
    {
             $username = ($this->session->userdata['logged_in']['username']);
            $data['title'] = "User Settings";
            $data['active_page'] = 'pages/user_settings';            
           $data['userdata'] = $this->login_model->read_user_information($username);
            $this->load->view('template/template',$data);
    }
    
    public function update()
    {
        $username = ($this->session->userdata['logged_in']['username']); 	
 		$this->form_validation->set_rules('firstname','firstname','trim|required');
 		$this->form_validation->set_rules('lastname','lastname','trim|required');
        $this->form_validation->set_rules('email','email','trim|required|valid_email'); 
        $this->form_validation->set_rules('cellno','cellno','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('cpassword','cpassword','required|matches[password]');
       
        
        if($this->form_validation->run() == false  )
        
        {
            $this->settings();
        }else
        
        {
            $result = $this->update_model->update_user($username);
           if($result)
           {
               
          $this->session->set_flashdata('donemsg','Update was succesfull ') ;  
          redirect('user_settings/settings');
         $this->session->flashdata('donemsg');
           }else
           {
                $this->session->set_flashdata('donemsg','Update was not succesfull') ;  
          redirect('user_settings/settings');
         $this->session->flashdata('donemsg');
           }
        }
    }
    
    public function update_user($userid)
    {
        	
 		$this->form_validation->set_rules('firstname','firstname','trim|required');
 		$this->form_validation->set_rules('lastname','lastname','trim|required');
 		$this->form_validation->set_rules('status','status','trim|required');
 		$this->form_validation->set_rules('user_role','user_role','trim|required');
       
        
        if($this->form_validation->run() == false  )
        
        {
            $this->edit_user($userid);
        }else
        
        {
            $result = $this->update_model->update_user_info($userid);
           if($result)
           {
               
          $this->session->set_flashdata('donemsg','Update was succesfull ') ;  
          redirect('user_settings/manage_users');
         $this->session->flashdata('donemsg');
           }else
           {
                $this->session->set_flashdata('donemsg','Update was not succesfull') ;  
          redirect('pages/manage_users');
         $this->session->flashdata('donemsg');
           }
        }
    }
    
    
     public function manage_users()
     {
            $data['title'] = 'Users';   
            $data['users'] = $this->get_query_model->get_users();
            $data['active_page'] = 'pages/manage_users';            
            $this->load->view('template/template',$data);
     }
     
     
     public function add_user()
    {
            $data['title'] = 'Add Users';   
            $data['active_page'] = 'pages/add_user';            
            $this->load->view('template/template',$data);
    }
    
    public function edit_user($userid)
    {
            $data['title'] = 'Edit Users';   
            $data['userdata'] = $this->get_query_model->get_user($userid);
            $data['active_page'] = 'pages/edit_user';            
            $this->load->view('template/template',$data);
        
    }
    
    public function commit_user()
    {
        $this->form_validation->set_rules('username','username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('firstname','firstname','trim|required');
 		$this->form_validation->set_rules('lastname','lastname','trim|required');
 		$this->form_validation->set_rules('status','status','trim|required|integer');
 		$this->form_validation->set_rules('user_role','user_role','trim|required|integer');
 		
 		
 		if($this->form_validation->run() == false)
 		{
 		    $this->add_user();
 		}else
 		{
 		    $query = $this->create_model->creat_user();
 		    
 		    if($query)
 		  {
               
          $this->session->set_flashdata('donemsg','User Successfully Added ') ;  
          redirect('user_settings/manage_users');
         $this->session->flashdata('donemsg');
           }else
           {
                $this->session->set_flashdata('donemsg','Adding User was not succesfull') ;  
          redirect('pages/manage_users');
             $this->session->flashdata('donemsg');
           }
 		    
 		}
        
    }
    
    
    
    
    
    
}