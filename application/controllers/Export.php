<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {



	public function __construct()
	{
		parent::__construct();//call CodeIgniter's default Constructor
		$this->load->database();//load database libray manually
		$this->load->model('repairs_model');//load Model
	}
	//public function index(){
	//	$data['usersData'] = $this->Crud_model->getUserDetails();
	//	$this->load->view('pages/userview',$data); 
	//}



	public function export_csv(){ 
		// file name 
		$filename = 'repairs_'.date('Ymd').'.pdf'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/pdf; ");
	   // get data 
		$data['faults'] = $this->get_query_model->get_faults(); 
		$usersData = $this->repairs_model->getrepairsDetails();
		// file creation 
		$file = fopen('php://output','w');
	
		$header = array("jorbcarno" ,"fault","fleet","status","datecreated","created by", "assigned tech","comment"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}



}