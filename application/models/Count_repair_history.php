<?php

class Count_repair_history extends CI_Model 
{

function count_gt_nor_reporting($fleetno)
	{
		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'1'));
		return $query->num_rows();
	}

function count_rpm($fleetno)
	{			

		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'2'));
		return $query->num_rows();
	}
	function count_certficate($fleetno)
	{
		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'3'));
		return $query->num_rows();
	}

function count_fmgps($fleetno)
	{			

		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'4'));
		return $query->num_rows();
	}
	function count_probes($fleetno)
	{
		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'5'));
		return $query->num_rows();
	}

function count_nospeed($fleetno)
	{			

		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'6'));
		return $query->num_rows();
	}
	function count_fm_not_powering($fleetno)
	{
		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'7'));
		return $query->num_rows();
	}

function count_mixvision($fleetno)
	{			

		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'8'));
		return $query->num_rows();
	}

	function count_csdcard($fleetno)
	{
			

		$query = $this->db->get_where('completed_repairs',array('fleetno' => $fleetno,'fault'=>'35'));
		return $query->num_rows();
	}
	
	




}