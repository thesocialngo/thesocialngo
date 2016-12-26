<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Market extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Business_by_user');
	}
	public function index(){
		$data_final['app_data'] = $this->Business_by_user->business_all_data();
		$this->load->view('front/header');		
		$this->load->view('front/market',$data_final);
	    $this->load->view('front/footer');	
	}
	public function view_details(){
		$id = base64_decode(base64_decode($this->input->get('id')));
		$single['app'] = $this->Business_by_user->single_business($id);
		$this->load->view('front/header');		
		$this->load->view('front/view_marketdetails',$single);
	    $this->load->view('front/footer');
	}
}
?>