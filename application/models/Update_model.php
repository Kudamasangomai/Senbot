<?php
class Update_model extends CI_Model 
{
	function assigntech($data)
 {
    $this->db->set($data);
  	$this->db->where('jobcardno',$this->uri->segment(3));
   $query = $this->db->update('repairs',$data);

   if($query)
   {
       return true;
   }
   else
   {
      return false;
   }
 }
 
  function secondassigntech($data)
  {
      
     
     
      
      
    $this->db->set($data);
  	$this->db->where('jobcardno',$this->uri->segment(3));
   $query = $this->db->update('repairs',$data);

   if($query)
   {
       return true;
   }
   else
   {
      return false;
   }
  }
 
    function update_job($jobcardno)
    {
        
        $data = array (
				'jobcardno'=> $jobcardno,
				'fleetno'=> $this->input->post('fleet'),
				'fault'=> $this->input->post('fault'),
							);
							
	$this->db->set($data);
  	$this->db->where('jobcardno',$jobcardno);
   $query = $this->db->update('repairs',$data);

   if($query)
   {
       return true;
   }
   else
   {
      return false;
   }
        
    }
 function update_tanks($data)
 {
  
    $this->db->set($data);
    $this->db->where('tankid',$this->uri->segment(3));
     $query = $this->db->update('tanks',$data);

     if($query)
   {
       return true;
   }
   else
   {
      return false;
   }


   
         }
         
         
         function update_user($username)
         {
             $data = array (
				'username'=> $username,
				'first_name'=> $this->input->post('firstname'),
				'last_name'=> $this->input->post('lastname'),
	            'email'=> $this->input->post('email'),
	            'cellno'=> $this->input->post('cellno'),
			    'password'=> $this->input->post('password'),
							);
							
	 	$this->db->set($data);
  	    $this->db->where('username',$username);
        $query = $this->db->update('users',$data);
    if($query)
   {
       return true;
   }
   else
   {
      return false;
   }
         }



           function update_user_info($userid)
           {
               $data = array (
			
				'first_name'=> $this->input->post('firstname'),
					'last_name'=> $this->input->post('lastname'),
						'user_role'=> $this->input->post('user_role'),
						'active_status'=>  $this->input->post('status'),
	       
							);
							
	$this->db->set($data);
  	$this->db->where('userid',$userid);
   $query = $this->db->update('users',$data);
    if($query)
   {
       return true;
   }
   else
   {
      return false;
   }
               
           }





  function close_job($data)
 {
     $this->db->set($data);
    $this->db->where('jobcardno',$this->uri->segment(3));
   $query = $this->db->update('repairs',$data);

   if($query)
      {


         $this->db->select('*');// select your filed
        $this->db->where('jobcardno',$this->uri->segment(3));
        $q = $this->db->get('repairs')->result(); // get result from table
        foreach ($q as $r) { // loop over results
        $move_query = $this->db->insert('completed_repairs', $r); // insert each row to country table

      if($move_query)
      {
        

         $this->db->where('jobcardno',$this->uri->segment(3));
        $this->db->delete('repairs');

      }else
      {
        return false;
      }

       }

        
    
   }
   else
   {
      return false;
   }
 }




}