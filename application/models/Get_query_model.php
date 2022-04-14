<?php


class Get_query_model extends CI_model
{


		function count_repairs()
 	{
 		return $this->db->count_all('repairs');
 	}
 	
 			function count_assets()
 	{
 		return $this->db->count_all('fleet');
 	}

 		function count_tanks()
 	{
 		return $this->db->count_all('tanks');
 	}

 		function count_fleet()
 	{
 		return $this->db->count_all('fleet');
 	}

	function count_pending_repairs()
 	{
 		
		$query = $this->db->where('status', 'pending')->get('repairs');
		return $query->num_rows();
 	}
 		function count_inprogress_repairs()
 	{
 		
		$query = $this->db->where('status', 'inprogress')->get('repairs');
		return $query->num_rows();
 	}

 		function count_completed_repairs()
 	{
 		
		$query = $this->db->where('status', 'completed')->get('repairs');
		return $query->num_rows();
 	}


 	function myrepairs($userid)
 	{
 		$this->db->where('assignedtech',$userid);
 		$this->db->or_like('secondtech',$userid);
 	 $this->db->where('status !=', 'completed');
 		$query = $this->db->get('repairs');
 		return $query->num_rows();

 	}

 function get_most_repairs()
 {  
     
    $this->db->select('*');
  $this->db->from('most_repaired_v');
     $query = $this->db->get();
     return $query->result();       
        
     
 }


 function get_most_repaired_fault()
 {

 $this->db->select('*');
  $this->db->from('most_repaired_fault');
     $query = $this->db->get();
     return $query->result();
 }
 	
 	function get_user($userid)
 	{
 	       	$this->db->where('userid',$userid);
 	    	$query = $this->db->get('users');
 	    	//return $query->num_rows();
 	    	  return $query->result();
 	}
 	
 	function get_users()
 	{
 	      $this->db->select('*');
          $this->db->from('users');
          $query = $this->db->get();
          return $query->result();

 	}

 		function get_repairs()
 	{
       // $this->db->limit($limit,$offset);
		$this->db->select('*');
 	//	$this->db->where('jobcardno !=', 'null');
 		//$this->db->where('repairs.techcreator = users.userid');
 		$this->db->where('repairs.assignedtech = users.userid');
 		$this->db->where('faults.faultid = repairs.fault');
 	    $this->db->where('fleet.fleetno = repairs.fleetno');
 	    $this->db->order_by('datecreated','Desc');
 		$query = $this->db->get('repairs,faults,users,fleet');
		return $query->result();
	//	$this->returnquery();
 	}
 	
 	
 	
 	   public function exportlist() {
		$this->db->select('*');
		$this->db->from('repairs,faults,users');
		$this->db->where('faults.faultid = repairs.fault');
		$this->db->where('repairs.assignedtech = users.userid');
		//$this->db->limit(10);  
		$query = $this->db->get();
		return $query->result_array();
	}
 	
 	
 		function get_pending_repairs($limit,$offset)
 	{
        $this->db->limit($limit,$offset);
		$this->db->select('*');
 		$this->db->where('jobcardno !=', 'null');
 		$this->db->where('status', 'Pending');
 		$this->db->where('repairs.assignedtech = users.userid');
 		$this->db->where('faults.faultid = repairs.fault');
 	    $this->db->where('fleet.fleetno = repairs.fleetno');
 	    $this->db->order_by('datecreated','Desc');
 		$query = $this->db->get('repairs,faults,fleet,users');
		return $query->result();
		$this->returnquery();


  
 

 	}
 	
 		function get_fleet()
	{
		$this->db->select('*');
		$this->db->where('fleetno !=','null');
		$this->db->order_by('fleetno','Asc');
		$query = $this->db->get('fleet');
		return $query->result();
		$this->returnquery();

 }
 
 
 function get_faults_tbl()
 {
     	$this->db->select('*');
		$this->db->where('faultid !=','null');
		$query = $this->db->get('faults');
		return $query->result();
		$this->returnquery();
 }

 	function get_destinations($id)
	{

		$this->db->select('*');
		$this->db->where('userid',$id);	
		$this->db->where('faults.faultid = repairs.fault');
		$this->db->where('jobcardno',$this->uri->segment(3));
		$query = $this->db->get('users,repairs,faults');
		return $query->result();
		$this->returnquery();

 }

 



 	function get_tanks()
	{
	$this->db->select('DISTINCT(fleet),tankid,dateallocated,tankright,tankleft,datecaptured,capturedby,last_name');
		//$this->db->select('*');
        //	$this->db->group_by('fleet'); 
		$this->db->where('fleet !=','null');
		$this->db->where('tanks.capturedby = users.userid');
		$this->db->order_by('dateallocated','desc');
		$query = $this->db->get('users,tanks');
		return $query->result();
		$this->returnquery();
		
		
		

 }
 	function get_fleet_tanks($tankid)
	{
		$this->db->select('*');
		$this->db->where('tankid',$tankid);
		$this->db->where('tanks.capturedby = users.userid');
		$this->db->order_by('datecaptured','Asc');
		$query = $this->db->get('users,tanks');
		return $query->result();
		$this->returnquery();
 }
 function get_fleet_tanks_hist($fleet)
 {
        $this->db->select('*');
		$this->db->where('fleet',$fleet);
		$this->db->where('tanks.capturedby = users.userid');
		$this->db->order_by('datecaptured','Asc');
		$query = $this->db->get('users,tanks');
		return $query->result();
		$this->returnquery();
     
 }

 	function get_faults()
	{
		$this->db->select('*');
		$this->db->where('faultid !=','null');
		$this->db->order_by('faultid','Asc');
		$query = $this->db->get('faults');
		return $query->result();
		$this->returnquery();

 }



  	function get_job_full_details()
 	{
 		$this->db->select('*');
 		$this->db->where('jobcardno',$this->uri->segment(3));
    
 	   $this->db->where('repairs.assignedtech = users.userid');
 		$this->db->where('repairs.fault = faults.faultid');
 	    $this->db->where('fleet.fleetno = repairs.fleetno');

 		$query = $this->db->get('repairs,users,faults,fleet');
 	//	return $query->result();
 	//	$this->returnquery();
 		
 		 if($query->num_rows() > 0) {
        return $query->result();
      } 
 
 	}


 	

 	 	function get_job_completed_details()
 	{
 		$this->db->select('*');
 		$this->db->where('jobcardno',$this->uri->segment(3));
 	   $this->db->where('completed_repairs.assignedtech = users.userid');
 		$this->db->where('completed_repairs.fault = faults.faultid');
 	    $this->db->where('fleet.fleetno = completed_repairs.fleetno');
 		$query = $this->db->get('completed_repairs,users,faults,fleet');

 		
 		
 			 if($query->num_rows() > 0) {
        return $query->result();
      }
 		
 	
 	}


        function get_dayend_repairs()
        {
            
            $format = time();	
            $date = date('Y-m-d',$format);
            
            
        $this->db->select('*');
        $this->db->from('completed_repairs,users,faults,fleet');
 	    $this->db->where('status','completed');
 		$this->db->where('my_repair_date',$date);
 	    $this->db->where('completed_repairs.fault = faults.faultid');
 	    $this->db->where('fleet.fleetno = completed_repairs.fleetno');
 	    $this->db->where('users.userid = completed_repairs.closedby');
 	    $query = $this->db->get();
 		return $query->result();
 		$this->returnquery();
        }
        
        
        
        function get_dayrange_repairs($mydata)
        {
            
            $format = time();	
            $date = date('Y-m-d',$format);
            $condition = "my_date BETWEEN " . "'" . $mydata['date_from'] . "'" . " AND " . "'" . $mydata['date_to'] . "'";
            
            
        $this->db->select('*');
        $this->db->from('completed_repairs,users,faults,fleet');
 	    $this->db->where('completed_repairs.fault = faults.faultid');
 	    $this->db->where('fleet.fleetno = completed_repairs.fleetno');
 	    $this->db->where('completed_repairs.assignedtech = users.userid');
 	  $this->db->where($condition);
 	    $query = $this->db->get();
 		return $query->result();
 		$this->returnquery();
        }


 	function gettech()
	{
		$this->db->select('*');
		$this->db->where('userid !=','null');
      $this->db->where('active_status !=',0);
		$query = $this->db->get('users');
		return $query->result();
		$this->returnquery();

 }
public function show_data_by_date_range($data) {
$condition = "my_date BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "'";
$this->db->select('*');
$this->db->from('completed_repairs,users,faults');
$this->db->where('completed_repairs.assignedtech = users.userid');
$this->db->where('faults.faultid = completed_repairs.fault');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}
 


 	function get_inprogress_repairs($limit,$offset)
 	{
        $this->db->limit($limit,$offset);
		$this->db->select('*');
 		$this->db->where('jobcardno !=', 'null');
 		$this->db->where('status', 'In Progress');
 		//$this->db->where('repairs.techcreator = users.userid');
 		$this->db->where('repairs.assignedtech = users.userid');
 		$this->db->where('faults.faultid = repairs.fault');
 	    $this->db->where('fleet.fleetno = repairs.fleetno');
 	    $this->db->order_by('datecreated','Desc');
 		$query = $this->db->get('repairs,users,faults,fleet');
		return $query->result();
		$this->returnquery();

 	}


 	function get_completed_repairs()
 	{
 		 //$this->db->limit($limit,$offset);
		$this->db->select('*');
 		$this->db->where('jobcardno !=', 'null');
 		$this->db->where('status', 'completed');
 	//	$this->db->where('completed_repairs.techcreator = users.userid');
 		$this->db->where('completed_repairs.assignedtech = users.userid');
 		$this->db->where('faults.faultid = completed_repairs.fault');
 	    $this->db->where('fleet.fleetno = completed_repairs.fleetno');
 	    $this->db->order_by('daterepaired','Desc');
 		$query = $this->db->get('completed_repairs,users,faults,fleet');
		return $query->result();
		$this->returnquery();
 	}


 	function get_repairs_history()
 	{
 		
		$this->db->select('*');
 		$this->db->where('fleetno',$this->uri->segment(3));
 	    $this->db->where('status', 'completed');
 		$this->db->where('completed_repairs.assignedtech = users.userid');
 		$this->db->where('faults.faultid = completed_repairs.fault');
 	    $this->db->order_by('daterepaired','Desc');
 		$query = $this->db->get('completed_repairs,users,faults');
		return $query->result();
		$this->returnquery();
 	}

 	function get_my_repairs()
 	{
 		$this->db->select('*');
 		$this->db->where('assignedtech',$this->uri->segment(3));
 		$this->db->where('faults.faultid = repairs.fault');
 		 $this->db->where('status !=', 'completed');
 	$this->db->or_like('secondtech',$this->uri->segment(3));
 	$this->db->where('faults.faultid = repairs.fault');

 		$query = $this->db->get('repairs,faults');
		return $query->result();
		$this->returnquery();
 	}
 	
 	function get_units()
 	{
 
 	    
 	     $this->db->select('*');
          $this->db->from('tracking_units');
          $query = $this->db->get();
          return $query->result();
 	}
 	
 	function get_s_fault($faultid)
 	{
        	$this->db->where('faultid',$faultid);
 	    	$query = $this->db->get('faults');
 	    	 return $query->result();
 	    
 	}




	function search_repair($search_repair_input)
		{
			

		$this->db->select('*');
    	$this->db->like('fleetno',$search_repair_input);
    	$this->db-> or_like('faults',$search_repair_input);
    	$this->db-> or_like('techcreator',$search_repair_input);
    	$this->db-> or_like('assignedtech',$search_repair_input);
    	//$this->db->where('repairs.techcreator = users.userid');
 		//$this->db->where('faults.faultid = repairs.fault');
 		$this->db->or_like('faults.faults',$search_repair_input);
 		$this->db-> or_like('users.last_name',$search_repair_input);
		$this->db->join('faults','repairs.fault = faults.faultid');
		$this->db->join('users', 'repairs.techcreator = users.userid ');
    $query = $this->db->get('repairs');
      if($query->num_rows() > 0)
    {        foreach ( $query->result() as $row )
            {
                $data[] = $row;
            }
            return $data;
    }
		}

 }