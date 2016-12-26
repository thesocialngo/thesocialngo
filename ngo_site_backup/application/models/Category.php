<?php
class Category extends CI_Model {
public function insert_category($data)
 {
   $this->db->insert('album_cat', $data);
   return TRUE;
  
 }
 
public function all_category()
 {
    $this->db->select('*');
	$this->db->from('category');
	$query = $this->db->get();
	$category_result = $query->result();
	return $category_result;
  
 }
}
