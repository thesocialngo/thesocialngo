<?php
class Register_form extends CI_Model {
public function insert_form($data)
 {
   $data_result = $this->db->insert('register', $data);
   return $data_result;
 }

public function select_reg_id($data_user) {
	$data_result = $this->db->insert('users', $data_user);
	return $data_result;
}
	 
}
