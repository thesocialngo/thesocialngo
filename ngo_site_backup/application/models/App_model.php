<?php
class App_model extends CI_Model {
function __construct() {
parent::__construct();
}
function add_app($dataarray) {
$this->db->insert('applications', $dataarray );	
}
function update_apps($dataarray , $id ,$dataimage) {
	$this->db->where('id', $id);
	$this->db->update('applications',$dataarray);
	$this->db->where('id', $id);
	$this->db->update('applications',$dataimage);
}

function all_app() {
	$query = $this->db->select('*')
						->from('applications')
				 		  ->get();
	$user_result = $query->result();
	return $user_result;
	
}

function all_user() {
	$this->db->select('*');
	$this->db->from('register');
	$query = $this->db->get();
	$user_result = $query->result();
	return $user_result;

}
function single_apps($dataarray) {
	$this->db->select('*');
	$this->db->from('applications');
	$this->db->where('id', $dataarray);
	$query = $this->db->get();
	$user_result = $query->result();
	return $user_result;
}
}
?>   

