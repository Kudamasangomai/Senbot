<?php

/**
 * 
 */
class Login_model extends CI_model
{
	
public function user_login($data) {
    
    $date = time();
//	$my_date = date('Y-m-d - H.i.s',$date);

$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'AND " . "active_status =" . "'" . $data['status'] . "' ";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();



if ($query->num_rows() == 1) {
    $this->db->where('username	', $data['username']);
         $this->db->update('users',array('last_logged_in' =>$date));
return true;
	 	 
        
} else {
return false;

}
}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "username =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) 
{
return $query->result();
} else {
return false;
}
}


function update_session($session_data,$session_username)
{
	//$query = $this->db->where('session_role',$session_data)->get('active_session');

	$query = $this->db->get_where('active_session',array('session_role' =>$session_data,'session_status' =>'1'));
	 if($query->num_rows() > 0)
	 {
	 	return true;
	 	
	 }else
	 {

	 
	 	 $this->db->where('session_role	', $session_data);
        $this->db->update('active_session', array('session_status'=>1,'session_username'=>$session_username));

	 }
}


function delete_session($sessionrole)
{
	$query = $this->db->get_where('active_session',array('session_role' => $sessionrole));

	if($query->num_rows() > 0 )
	{
		 $this->db->where('session_role	', $sessionrole);
        $this->db->update('active_session', array('session_status'=>0,'session_username'=>'No Active User'));
	}else
	{
		return false;
	}


}


function delete_all_session($srole)
{


		$query = $this->db->get_where('active_session',array('session_role'=>$srole));



 		if($query->num_rows() > 0)
	 {
	 	 $this->db->where('session_role	', $srole);
	    $this->db->update('active_session', array('session_status' =>0));
	 	
	 }else
	 {

	 
	 	return false;

	 }

}
}
?>