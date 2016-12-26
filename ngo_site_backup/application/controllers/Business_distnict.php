<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Business_distnict extends CI_Controller { 
		public function __construct(){       
		parent::__construct();       
		
	}
	public function display_market_item(){
		$itm=  !empty($this->input->post('item'))?$this->input->post('item'):NULL;
		$city =  !empty($this->input->post('city'))?$this->input->post('city'):NULL;
		$this->db->select('*');
		$this->db->from('business');
		if($itm){ $this->db->where('item', $itm); }
			if($city){ $this->db->where('city', $city); }
			$query = $this->db->get();
			$data_final['donate_items']  =  $query->result_array();
		    $this->load->view('front/view_market_ajax',$data_final);

	}
  	
}