<?php
class Donation_by_user extends CI_Model {

	public function add_donation($dataarray){
		$this->db->insert('applications', $dataarray );	
	}
	
	public function update_donation($dataarray , $id ,$dataimage) {
		$this->db->where('id', $id);
		$this->db->update('applications',$dataarray);
		$this->db->where('id', $id);
		$this->db->update('applications',$dataimage);
	}
	
	public function single_donation($id) {
		$query = $this->db->select('*')->from('applications')->where('applications.id', $id)->get();
		return $query->result_array();
	}
  	
	public function downloaded_data()
 	{  
		$this->load->model('App_model'); 
		$this->db->select('*');
		$this->db->from('applications');
		$query = $this->db->get();
		return $query->result_array();
  	}
	
	public function downloaded_all_data()
 	{  
		$query = $this->db->select('*')->from('applications')->get();
		return $query->result_array();
  	}
}













