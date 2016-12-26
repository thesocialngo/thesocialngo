<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donate extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Donation_by_user');
	}
	public function index(){
		$data_final['app_data'] = $this->Donation_by_user->downloaded_all_data();
		$this->load->view('front/header');		
		$this->load->view('front/donate',$data_final);
	    $this->load->view('front/footer');
  }
	public function view_details(){
		$id = base64_decode(base64_decode($this->input->get('id')));
		$single['app'] = $this->Donation_by_user->single_donation($id);
		$this->load->view('front/header');		
		$this->load->view('front/view_donatedetails',$single);
	    $this->load->view('front/footer');
	}
}
?>