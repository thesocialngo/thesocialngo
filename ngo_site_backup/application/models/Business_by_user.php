<?php
class Business_by_user extends CI_Model {

	public function add_business($dataarray){
		$this->db->insert('business', $dataarray );	
	}
	
	public function update_business($dataarray , $id ,$dataimage) {
		$this->db->where('id', $id);
		$this->db->update('business',$dataarray);
		$this->db->where('id', $id);
		$this->db->update('business',$dataimage);
	}
	
	public function single_business($dataarray){
		$query = $this->db->select('*')->from('business')->where('business.id', $dataarray)->get();
		return $query->result_array();
	}
  	
	public function downloaded_data()
 	{  
		$this->load->model('App_model'); 
		$this->db->select('*');
		$this->db->from('business');
		$query = $this->db->get();
		return $query->result_array();
  	}
	public function business_all_data()
 	{     
		$query = $this->db->select('*')->from('business')->get();
		return $query->result_array();
  	}
}