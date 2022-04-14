<?php
class Repairs_model extends CI_Model 
{
	function getrepairsDetails(){

		 $now = date("Y-m-d H:i:s");

 		$response = array();
		$this->db->select('jobcardno,faults,fleetno,status,my_date,last_name,assignedtech,comment');
		//$this->db->select('*');
		$this->db->where('faults.faultid = repairs.fault');
		$this->db->where('users.userid = repairs.techcreator');
		$q = $this->db->get('repairs,faults,users');
		$response = $q->result_array();
		
$this->db->set('column', date('Y-m-d H:i:s'));
	 	return $response;
	}

	function getrepairs(){
 		$response = array();
		$this->db->select('*');
		$q = $this->db->get('repairs');
		$response = $q->result_array();
	 	return $response;
	}
	
}
