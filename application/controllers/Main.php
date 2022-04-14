<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {



public function __construct() {
  parent::__construct();



if (!isset($this->session->userdata['logged_in']))
       {
				        redirect('auth/index');
				        
		}
	  }



public function dashboard()
  {
   
     
       //$userid = ($this->session->userdata['logged_in']['userid']);
     //$data['myrepairs'] =$this->get_query_model->myrepairs($userid);
    $b = $this->get_query_model->count_fleet();
    $a = $this->count_model->gt_not_reporting();     
    $data['active_page'] = 'dashboard';    
    $data['not_reporting'] = (int)$a;
    $data['fmnot_powering'] = $this->count_model->fmnot_powering(); 
    $data['panicbtn'] = $this->count_model->no_panic_button(); 
    $data['camera'] = $this->count_model->camera(); 
    $data['probes'] = $this->count_model->count_probes(); 
    $data['norpm'] = $this->count_model->no_rpm();
    $data['nospeed'] = $this->count_model->no_speed();
    $data['notacho'] = $this->count_model->no_tacho_data();
    $data['nocertificate'] = $this->count_model->no_certificate();
    $data['fmgps'] = $this->count_model->count_fmgps();
    $data['vns'] = $this->count_model->count_fmgps();
    $data['fmnotdownloading'] = $this->count_model->count_fmnotdownloading();
    $data['most_repaired'] = $this->get_query_model->get_most_repairs();
    $data['most_repaired_fault'] = $this->get_query_model->get_most_repaired_fault();
    $data['title'] = "Dashboard";
    $this->load->view('template/template',$data);

  }   

	

  function repairs()
{
            $data['fleet'] = $this->get_query_model->get_fleet();
            $data['faults'] = $this->get_query_model->get_faults(); 
            $data['title'] = "Repairs";
            $data['active_page'] = 'pages/repairs';            
            $data['repairs'] = $this->get_query_model->get_repairs();
            $this->load->view('template/template',$data);   
}
function faults()
{
            $data['active_page'] = 'pages/faults';            
            $data['faults'] = $this->get_query_model->get_faults_tbl();
            $this->load->view('template/template',$data); 
    
}



function reports()
{
             $data['title'] = "End Of Day Repairs";
            $data['active_page'] = 'pages/reports'; 
            $this->load->view('template/template',$data);  
}


	function mostrepaired_T()
		{
		  /*  $data['fleet'] = $this->get_query_model->get_fleet();
            $data['faults'] = $this->get_query_model->get_faults(); 
            $data['title'] = "Most Repaired Trucks";
            $data['active_page'] = 'pages/mostrepaired';            
            $data['repairs'] = $this->get_query_model->get_most_repairs();
            $this->load->view('template/template',$data); */
          // var_dump($data['repairs']);
             $data['active_page'] = 'pages/mostrepaired'; 
           $data['most_repaired'] = $this->get_query_model->get_most_repairs();
            $this->load->view('template/template',$data);
        
		    
		}

    function mostrepaired_f()
    {
          $data['active_page'] = 'pages/mostrepairedfaults'; 
           $data['most_repaired_f'] = $this->get_query_model->get_most_repaired_fault();
            $this->load->view('template/template',$data);
    }

    function myrepairs($userid)
{
   		   $config = array();
           $config['base_url'] = 'http://localhost/cip/Senbot/main/myrepairs';
           $config['per_page']= 10;
           $config['num_links']= 5;  
           
            $this->pagination->initialize($config);
            $data['links']= $this->pagination->create_links();
            $data['fleet'] = $this->get_query_model->get_fleet();
          $data['faults'] = $this->get_query_model->get_faults(); 
            $data['title'] = "My Repairs";
            $data['active_page'] = 'pages/myrepairs';            
            $data['repairs'] = $this->get_query_model->get_my_repairs($config['per_page'],$this->uri->segment(3));
            $this->load->view('template/template',$data);

}

function closemyjob()
{
      $data['assign_data'] = $this->get_query_model->get_job_full_details();
  //    $data['gettech'] = $this->get_query_model->gettech();
      $data['title'] = "Close My Job";
      $data['active_page'] = 'pages/closemyjob';        
      $this->load->view('template/template',$data);
}


      function job_full_details($jobcardno)
{
           $data['job_full_details'] = $this->get_query_model->get_job_full_details($jobcardno);
           $data['title'] = "Job Full Details";
           $data['active_page'] = 'pages/job_full_details';       
           $this->load->view('template/template',$data);
}


      function job_completed_details($jobcardno)
{
           $data['job_full_details'] = $this->get_query_model->get_job_completed_details($jobcardno);
           $data['title'] = "Job Completed Details";
           $data['active_page'] = 'pages/job_completed_details';         
           $this->load->view('template/template',$data);
}


function tanks()
{

          /*   $data['fleet'] = $this->get_query_model->get_fleet();
            $data['faults'] = $this->get_query_model->get_faults(); 
            $data['title'] = "Repairs";
            $data['active_page'] = 'pages/repairs';            
            $data['repairs'] = $this->get_query_model->get_repairs();
            $this->load->view('template/template',$data); */
       
          
       
          
           $this->db->select('*');
            $this->db->from('fleet');
            $data['myfleet'] = $this->db->get()->result();          
            $data['title'] = "Tanks";
            $data['links']= $this->pagination->create_links();
            $data['active_page'] = 'pages/tanks';            
            $data['tanks'] = $this->get_query_model->get_tanks($this->uri->segment(3));
            $this->load->view('template/template',$data);  
            
            
            
     
        
      

}
   function delete($id)
 {

    /*$this->delete_model->delete_repair($jobcardno);
     $this->session->set_flashdata('donemsg','Job deleted') ;  
    redirect('main/repairs');
    $this->session->flashdata('donemsg');*/
      $this->load->database();
      $this->db->delete('repairs', array('jobcardno' => $id));
        

 }
 


function assign()
{

    $data['assign_data'] = $this->get_query_model->get_job_full_details();
    $data['gettech'] = $this->get_query_model->gettech();
    $data['title'] = "Assig Technician";
    $data['active_page'] = 'pages/assign';        
    $this->load->view('template/template',$data);

}

    function secondassign()
    {
       $data['assign_data'] = $this->get_query_model->get_job_full_details();
       $data['gettech'] = $this->get_query_model->gettech();
        $data['title'] = "Second Assigment";
        $data['active_page'] = 'pages/secondassign';        
       $this->load->view('template/template',$data);
    }
    function assigntosecond()
    {
        
          $this->form_validation->set_rules('assignto','Technician','required');
           if($this->form_validation->run() == false)
    {
        $this->secondassign();
    }else
    {
        
        $this->db->select('last_name');
        $this->db->from('users');
        $this->db->where('userid',$this->input->post('assignto'));
        $row = $this->db->get()->row();
            if (isset($row)) {
           
                $data =array(
                    
                    'secondtech'=> $this->input->post('assignto') ,
                    'secondtechname'=> $row->last_name
                   );
             $query = $this->update_model->secondassigntech($data);
             
              if($query)
       {
           $this->session->set_flashdata('donemsg','Job succesfully Assigned') ;  
           redirect('main/inprogress'); 
           $this->session->flashdata('donemsg');
           
       }else
       
       {
           $this->session->set_flashdata('donemsg','Job Not Assigned') ;  
         redirect('main/inprogress'); 
         $this->session->flashdata('donemsg');
           
       }
              
             } else {
             return false;
            }
                    
               
       
             
             
    }
        
    }

function assignto()
{
    $fname = ($this->session->userdata['logged_in']['first_name']);
    $lname = ($this->session->userdata['logged_in']['last_name']);

    $this->form_validation->set_rules('assignto','Technician','required');
    if($this->form_validation->run() == false)
    {
        $this->assign();
    }else
    {
       $data =array(
                    
                    'assignedtech'=> $this->input->post('assignto') ,    
                    'status'=>'In Progress',  
                    'secondtech'=>'None',
                  
                   );

       $query = $this->update_model->assigntech($data);

       if($query)
       {       

        $pro_id = [];
        $id = $this->input->post('assignto');
        $data['result'] = $this->get_query_model->get_destinations($id);
       

         foreach($data['result'] as $key => $val){
              $pro_id[] = $val->cellno;
              $pro_id[] = $val->faults;
                 $pro_id[] = $val->fleetno;
                  $pro_id[] = $val->last_name;
                   $pro_id[] = $val->first_name;
               }

   
        $sendto = $val->cellno;
        $faults = $val->faults;
        $fleetno = $val->fleetno;
        $last_name = $val->last_name;
        $first_name = $val->first_name;      
      
        error_reporting(0);
        $username = 'kudam775';
        $token = '';
        $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';
        $destinations = $sendto;
         $link =  anchor("http://senbot.co.zw/main/job_full_details/$val->jobcardno", 'Click');
        
   $message = 
    " Hi ".$first_name." " .$last_name." <br/><br/> You Have been
     Tasked to Fix Fleet " .$fleetno. " It has a fault of ".$faults.
                  "<br/> open the link here ".$link."
                 <br/><br/> Regards <br/><br/>".$fname. " ".$lname.""."<br/>" ;

        
      // echo $message;

        /*$ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
      $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
      $ws_response = @file_get_contents($ws_str);

        $obj  = json_decode($ws_response);
       echo '<pre>' . $obj . '</pre>';*/

      /* $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'mail.senbot.co.zw',
      'smtp_port' => 587,
     // 'smtp_user' => 'sendem@cargocarriers.co.zw', // change it to yours
      'smtp_user' =>  'senbotco@senbot.co.zw',
      'smtp_pass' => '', // change it to yours
   'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'validation' => TRUE
       );
     

      $this->load->library('email');
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");
      $this->email->From('senbotco@senbot.co.zw','Senbot');
    $this->email->to('sendem@cargocarriers.co.zw');
    //$this->email->to('kudam775@gmail.com');
      $this->email->subject($fleetno.' '.$faults);
      $this->email->message($message);&*/
      


     // if (!$this->email->send())
      // {
    //   show_error($this->email->print_debugger());
      // $this->session->set_flashdata('donemsg','Job succesfully Assigned') ;  
        // redirect('main/repairs'); 
     //    $this->session->flashdata('donemsg');
     // }else
     // {

         $this->session->set_flashdata('donemsg','Job succesfully Assigned') ;  
         redirect('main/repairs'); 
         $this->session->flashdata('donemsg');
      //}
       
       

       }
       else
       {


       }


    
 
      
        
    }}

    function add_tanks(){


     $this->form_validation->set_rules('fleet','Fleet','required');    
      $this->form_validation->set_rules('mydate','date','required');
      $this->form_validation->set_rules('tankright','Tank Right','required');
      $this->form_validation->set_rules('tankleft','Tank left','required');
    
    
     //$this->form_validation->set_rules('tankright','Tank Right','required|is_unique[tanks.tankright]');
    //  $this->form_validation->set_rules('tankleft','Tank left','required|is_unique[tanks.tankleft]|differs[tankright]');
      
      
      

        $userid = ($this->session->userdata['logged_in']['userid']);
        if($this->form_validation->run() == false)
        {
          $this->tanks();

        }else

        {
            $data =array(


              'fleet' => $this->input->post('fleet') ,
              'dateallocated' => $this->input->post('mydate') ,
              'tankright' => $this->input->post('tankright') ,
              'tankleft' => $this->input->post('tankleft') ,
              'capturedby' =>$userid,


               );
             $query =$this->create_model->add_tank($data);
           
             if($query)
             {
              $this->tanks();
             }else
             {
              echo "something went wrong";
             }
        }


    }
    function edit_tank($tankid)
    {

            $data['title'] = "Edit Fleet Tanks";  
            $data['active_page'] = 'pages/edit_tank';         
            $data['fleettanks'] = $this->get_query_model->get_fleet_tanks($tankid);
            $this->load->view('template/template',$data);
    }
  
    
     function fleet_tanks($fleet)
    {
          
            $data['title'] = "Fleet Tanks";
            $data['active_page'] = 'pages/fleet_tanks';            
            $data['fleet_tanks'] = $this->get_query_model->get_fleet_tanks_hist($fleet);
            $this->load->view('template/template',$data); 
    }

function update_tanks($tankid){

    //$this->form_validation->set_rules('fleet','Fleet','required|is_unique[tanks.fleet]');
    $this->form_validation->set_rules('mydate','date','required');
   $this->form_validation->set_rules('tankright','Tank Right','required');
    $this->form_validation->set_rules('tankleft','Tank left','required');

        $userid = ($this->session->userdata['logged_in']['userid']);
        if($this->form_validation->run() == false)
        {
         $this->edit_tank($tankid);


        }else

        {
            $data =array(

                'tankid'=> $tankid,
              'fleet' => $this->input->post('fleet') ,
              'dateallocated' => $this->input->post('mydate') ,
              'tankright' => $this->input->post('tankright') ,
              'tankleft' => $this->input->post('tankleft') ,
              'capturedby' =>$userid,


               );
             $query =$this->update_model->update_tanks($data);
           
             if($query)
             {
             // $this->tanks();
          $this->session->set_flashdata('error_msg','Update Succesfully Done') ;  
          redirect('main/tanks'); 
         $this->session->flashdata('error_msg');

             }else
             {
      



            $data['active_page'] = 'pages/edit_tank';
            $data['error_msg']      = 'There is an Exsisting Tank with That Serial number';   
            $data['fleettanks'] = $this->get_query_model->get_fleet_tanks($tankid);
            $this->load->view('template/template',$data);
              
             }
        }


    }
function delete_tank($tankid)
{
 
           $this->delete_model->delete_tank($tankid);
           $this->session->set_flashdata('error_msg','Deleted Succesfully') ;  
           redirect('main/tanks');
           $this->session->flashdata('error_msg');
}


		function assets()
		{
				if   (isset($this->session->userdata['logged_in']))
      {
      
           $config = array();
           $config['base_url'] = 'http://localhost/cip/Senbot/main/assets';
           $config['total_rows'] = $this->get_query_model->count_assets('repairs');
           $config['per_page']= 10;
           $config['num_links']= 5;
      
             $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = '<li>';
            $config['next_tag1_close'] ='</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag1_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag1_close'] = '</li>';
            $config['last_tag_close'] = '<li>';
            $config['last_tag1_close'] = '</li>';

            $this->pagination->initialize($config);
            $data['links']= $this->pagination->create_links();
            $data['title'] = "Assets ";
            $data['active_page'] = 'pages/assets';            
            $data['fleet'] = $this->get_query_model->get_fleet($config['per_page'],$this->uri->segment(3));
            $this->load->view('template/template',$data);

        }else
        {
          redirect($index_page);  
          $data['login'] = "PLEASE LOGIN";
        }
		}
		
		
	



    function pending()
    {
      if   (isset($this->session->userdata['logged_in']))
      {
      
           $config = array();
           $config['base_url'] = 'http://localhost/cip/Senbot/main/pending';
           $config['total_rows'] = $this->get_query_model->count_pending_repairs('repairs');
           $config['per_page']= 9;
           $config['num_links']= 5;
      
             $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = '<li>';
            $config['next_tag1_close'] ='</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag1_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag1_close'] = '</li>';
            $config['last_tag_close'] = '<li>';
            $config['last_tag1_close'] = '</li>';

            $this->pagination->initialize($config);
            $data['links']= $this->pagination->create_links();
            $data['title'] = "Pending Jobs";
            $data['active_page'] = 'pages/pending_repairs';            
            $data['repairs'] = $this->get_query_model->get_pending_repairs($config['per_page'],$this->uri->segment(3));
            $this->load->view('template/template',$data);

        }else
        {
          redirect($index_page);  
          $data['login'] = "PLEASE LOGIN";
        }
    }


     function inprogress()
    {
    
           $config = array();
           $config['base_url'] = 'http://localhost/cip/Senbot/main/inprogress';
           $config['total_rows'] = $this->get_query_model->count_inprogress_repairs('repairs');
           $config['per_page']= 10;
           $config['num_links']= 5;
      
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = '<li>';
            $config['next_tag1_close'] ='</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag1_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag1_close'] = '</li>';
            $config['last_tag_close'] = '<li>';
            $config['last_tag1_close'] = '</li>';

            $this->pagination->initialize($config);
            $data['links']= $this->pagination->create_links();
            $data['title'] = "Work In Progress";
            $data['active_page'] = 'pages/inprogress';             
            $data['repairs'] = $this->get_query_model->get_inprogress_repairs($config['per_page'],$this->uri->segment(3));
            $this->load->view('template/template',$data);



           }


 function completed()
    {          
                
            $data['title'] = "Completed Repairs";  
            $data['active_page'] = 'pages/completed';         
            $data['repairs'] = $this->get_query_model->get_completed_repairs();
            $this->load->view('template/template',$data);
         

    }

function repair_history($fleetno)
    {
    

            $fleethistory = $fleetno;
            $data['fleetnohist'] = $fleethistory;
           $config = array();
           $config['base_url'] = 'http://localhost/cip/Senbot/main/repair_history/';
           $config['total_rows'] = $this->get_query_model->count_completed_repairs('completed_repairs');
           $config['per_page']= 10;
           $config['num_links']= 5;
      
            

            $this->pagination->initialize($config);
            $data['links']= $this->pagination->create_links();
            $data['active_page'] = 'pages/repairs_history';    
            $data['fmgps'] = $this->count_repair_history->count_fmgps($fleetno);
            $data['gt_not_reporting'] = $this->count_repair_history->count_gt_nor_reporting($fleetno);  
            $data['probe'] = $this->count_repair_history->count_probes($fleetno);  
            $data['mixvision'] = $this->count_repair_history->count_mixvision($fleetno);  
            $data['rpm'] = $this->count_repair_history->count_rpm($fleetno);  
            $data['speed'] = $this->count_repair_history->count_nospeed($fleetno);  
            $data['certficate'] = $this->count_repair_history->count_certficate($fleetno);  
            $data['csdcard'] = $this->count_repair_history->count_csdcard($fleetno);  
            $data['title'] = "Repairs History";
            $data['repairs'] =
             $this->get_query_model->get_repairs_history($config['per_page'],$this->uri->segment(3));
            $this->load->view('template/template',$data);

           }



           function search()
  {
    $search_repair_input = $this->input->post('repair');
    $this->form_validation->set_rules('repair','repair','trim|required|max_length[10]');
  
    if($this->form_validation->run() == false)
    {
        $this->repairs();
    }else
    {
      $query = $this->get_query_model->search_repair($search_repair_input);

      if($query)
      {
        $data['title'] = 'Search';
         $data['active_page']= 'pages/repairs';
        $data['repairs'] = $query;
         $data['links']= $this->pagination->create_links();
        $data['fleet'] = $this->get_query_model->get_fleet();
        $data['faults'] = $this->get_query_model->get_faults(); 
        
       
        $this->uri->segment(3);
         $this->load->view('template/template',$data);
   
   
     
      }else
      {

        ///$data['links']= $this->pagination->create_links();
        $data['fleet'] = $this->get_query_model->get_fleet();
        $data['faults'] = $this->get_query_model->get_faults(); 
        $data['repairs'] = $query;
        $data['nodata'] =  'NO RESULTS FOUND';
        $data['active_page']= 'pages/repairs';
         $this->load->view('template/template',$data);
   

      }
    }
  }

  public function select_by_date_range() {
$date1 = $this->input->post('date_from');
$date2 = $this->input->post('date_to');
$data = array(
'date1' => $date1,
'date2' => $date2
);
if ($date1 == "" || $date2 == "") {
$data['date_range_error_message'] = "Both date fields are required";
echo "mmm";
} else {
$result = $this->get_query_model->show_data_by_date_range($data);
if ($result != false) {
$data = $result;



            $data['title'] = "Completed Repairs";  
            $data['active_page'] = 'pages/completed';         
            $data['repairs'] = $result;
            $this->load->view('template/template',$data);
} else {
$data['result_display'] = "No record found !";


       
        $this->session->set_flashdata('error_msg','No record found !') ;  
          redirect('main/completed');
         $this->session->flashdata('error_msg');
}
}

}

function units()
{
          
            $data['title'] = "Units";
            $data['active_page'] = 'pages/units';            
            $data['units'] = $this->get_query_model->get_units();
            $this->load->view('template/template',$data);
}


    
    
    
    
    
    
    
    
    


}