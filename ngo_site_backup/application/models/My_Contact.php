<?php
class My_Contact extends CI_Model {

	public function insert_form($data){
   		$data_result = $this->db->insert('contact_enquiry', $data);
   		return $data_result;
 	}
}
