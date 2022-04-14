<?php

class Delete_model extends CI_Model
{


	function delete_repair($jobcardno)
	{
			$this->db->where('jobcardno',$this->uri->segment(3));
  		  $this->db->delete('repairs');
	}

	function delete_tank($tankid)
	{
			$this->db->where('tankid',$this->uri->segment(3));
  		  $this->db->delete('tanks');
	}

}