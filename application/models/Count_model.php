<?php

class Count_model extends CI_Model 
{
  
  
  	function totalf()
    {
      
      $query = "SELECT count(*),fault as 'faults' FROM repairs group by fault";
      return $query->result();
     // return $sql->num_rows();
      
      
      
    }
  
  



	function gt_not_reporting()
	{
		
		$query = $this->db->where('fault', '1')->get('repairs');
		return $query->num_rows();		
	}
		function no_rpm()
	{
		
		$query = $this->db->where('fault', '2')->get('repairs');
		return $query->num_rows();		
	}
    		function no_certificate()
	{
		
		$query = $this->db->where('fault', '3')->get('repairs');
		return $query->num_rows();		
	}
		function Count_fmgps()
	{
		
		$query = $this->db->where('fault', '4')->get('repairs');
		return $query->num_rows();		
	}

    	function Count_probes()
	{
		
		$query = $this->db->where('fault', '5')->get('repairs');
		return $query->num_rows();		
	}
    		function no_speed()
	{
		
		$query = $this->db->where('fault', '6')->get('repairs');
		return $query->num_rows();		
	}
		function fmnot_powering()
	{
		
		$query = $this->db->where('fault', '7')->get('repairs');
		return $query->num_rows();		
	}

	function camera()
	{
		
		$query = $this->db->where('fault', '8')->get('repairs');
		return $query->num_rows();		
	}
		function underreadingspeed()
	{
		
		$query = $this->db->where('fault', '9')->get('repairs');
		return $query->num_rows();		
	}

	function no_panic_button()
	{
		
		$query = $this->db->where('fault', '12')->get('repairs');
		return $query->num_rows();		
	}



		function vehicle_not_starting()
	{
		
		$query = $this->db->where('fault', '11')->get('repairs');
		return $query->num_rows();		
	}

		function no_tacho_data()
	{
		
		$query = $this->db->where('fault', '13')->get('repairs');
		return $query->num_rows();		
	}


	





		function count_fmnotdownloading()
	{
		
		$query = $this->db->where('fault', '17')->get('repairs');
		return $query->num_rows();		
	}
 		


}