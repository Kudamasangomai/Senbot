<?php

class Create_model extends CI_Model
{
	
	function create_job($userid)
		{
		    
	
   
			 $a = rand(1000,9999); 
			$status="Pending";
			$otherstatus ="In Progress";
			$date = time();
			$my_date = date('Y-m-d',$date);
			//$my_date = Date('Y-m-d h:i:s');

	

			$jcn = rand(100,10000);
			$jobcardno = 'CAR'.$jcn.'';         
          


			$data = array (
			//	'jobcardno'=> $jobcardno,
				'fleetno'=> $this->input->post('fleet'),
				'fault'=> $this->input->post('fault'),
				'status'=> $status,
				'datecreated'=>$date,
				'techcreator'=>$userid,			
				'my_date'=> $my_date,
				'my_repair_date'=>$my_date,
				'assignedtech'=> 0,
				'repairdescription' => 'N/A',
				'closedby'=>'Not Closed Yet',
				'secondtechname' => 'none',
			//	'dc'=>$jcnn
							);


			$condition = "fleetno =" .
			 "'" . $this->input->post('fleet') .
			  "' AND " . "status =" . "'" .$status .
			    "' AND "."fault ="."'".$data['fault']."'";

			    $condition2 =  "fleetno =" .
			 "'" . $this->input->post('fleet') .
			  	"' AND "."status ="."'".$otherstatus.
			    "' AND "."fault ="."'".$data['fault']."'";

			$this->db->select('*');
			$this->db->from('repairs');
			$this->db->where($condition);		
            $query = $this->db->get();

            if($query->num_rows() == 0)

            {

            $this->db->select('*');
			$this->db->from('repairs');
			$this->db->where($condition2);		
            $query2 = $this->db->get();

          if($query2->num_rows() == 0)
          {
          	$query_insert = $this->db->insert('repairs',$data);
          	if($query_insert)
			{
				return true;
			}else
			{
				return false;
			}

          }else
          {
			return false;
          }       			

            }
             else {
          return false;

               }			

		}

		function add_tank($data)
		{
			$query =$this->db->insert('tanks',$data);
			if ($query) {
			
			$this->db->select('*');// select your filed
        $this->db->where('fleet',$data['fleet']);
        $q = $this->db->get('tanks')->result(); // get result from table
        foreach ($q as $r) { // loop over results
        $move_query = $this->db->insert('tanks_history', $r); // insert each row to country table
					return true;
			
			}
			}
			else

			{
				return false;
			}
		}




        	function create_new_fault()
        	{
        	    $data = array (
        	    'faults'=> $this->input->post('faults'),
        	    );
        	    
        	$query =$this->db->insert('faults',$data);
			if ($query) {
				return true;
			}else

			{
				return false;
			}
        	    
        	}








	}


