<?php
class Business_Model extends CI_Model {
function __construct() {
	parent::__construct();
}
function add_business($dataarray){
	$this->db->insert('business', $dataarray );	
}
function update_business($dataarray , $id ,$dataimage) {
	$this->db->where('id', $id);
	$this->db->update('business',$dataarray);
	$this->db->where('id', $id);
	$this->db->update('business',$dataimage);
}

function all_business(){
	$query = $this->db->select('*')
						->from('business')
				 		  ->get();
	$user_result = $query->result();
	return $user_result;
	
}
function single_business($dataarray) {
	$this->db->select('*');
	$this->db->from('business');
	$this->db->where('id', $dataarray);
	$query = $this->db->get();
	$user_result = $query->result();
	return $user_result;
}
}
?>   

