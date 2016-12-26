<?php
class Downloads_by_user extends CI_Model {
	
	public function insert_download_by($data)
	{
		$this->db->insert('downloads_by_user', $data);
   		return TRUE;
	}
  	public function downloaded_data()
 	{  
		$this->load->model('App_model'); 
		$session 	= checksession();
		$loged_user = $session['loged_user_id'];
		$this->db->select('*');
		$this->db->from('applications');
		$this->db->where('user_id', $loged_user);
		$query = $this->db->get();
		return $query->result_array();
  	}
  
  
  public function dnld_by_user($dnldr_user)
  {  
  	$this->db->select('*');
  	$this->db->from('register');
  	$this->db->where('id', $dnldr_user);
  	$query_username = $this->db->get();
  	$user_result_username = $query_username->result();
  	foreach($user_result_username  as $row_app_name){
  		$name =$row_app_name->first_name ." ". $row_app_name->last_name;
  		$email = $row_app_name->email;
  	  }
  	  $this->load->model('App_model');
  $this->db->select('*');
  $this->db->from('downloads_by_user');
  $this->db->where('download_by', $dnldr_user);
  $query = $this->db->get();
  $user_result = $query->result();
  $final_data = array();
  foreach($user_result as $row){
  	$id=  $row->id;
  	$do_date= $row->download_on;
  	$single_app =$this->App_model->single_apps($id);
  	foreach($single_app  as $row_app_title){
  		$app_link=  $row_app_title->Link;
  		$idd= $row_app_title->heading;
  		$final_data[] = array( 'app_title'=>$idd, 'app_link'=>$app_link, 'name'=>$name , 'email'=>$email,  'on_date'=> $do_date );
  			
  	}
  	}
  return $final_data;
  }
  
  public function downloaded_by_app($id)
  {  $this->load->model('App_model');
  $this->db->select('*');
  $this->db->from('downloads_by_user');
  $this->db->where('id', $id);
  $query = $this->db->get();
  $user_result = $query->result();
  $final_data = array();
  foreach($user_result as $row){
  	$download_by=  $row->download_by;
  	$do_date= $row->download_on;
  	$single_app =$this->App_model->single_apps($id);
  	foreach($single_app  as $row_app_title){
  		$idd= $row_app_title->heading;
  		$app_link= $row_app_title->Link;	
  	 }
  	 
  	 $this->db->select('*');
  	 $this->db->from('register');
  	 $this->db->where('id', $download_by);
  	 $query_username = $this->db->get();
  	 $user_result_username = $query_username->result();
  	 foreach($user_result_username  as $row_app_name){
  	 	$name =$row_app_name->first_name ." ". $row_app_name->last_name;
  	 	$email = $row_app_name->email; 
  	 	$final_data[] = array( 'app_title'=>$idd, 'app_link'=>$app_link, 'name'=>$name , 'email'=>$email,  'on_date'=> $do_date );
  	 } 
  }
  return $final_data;
  } 
}
