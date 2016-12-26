<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if( $this->session->userdata('fronend_logged_in') ){
			redirect('donation');
		}
	}
 	public function index(){	
		$this->load->view('front/header');
		$this->load->view('front/login');
		$this->load->view('front/footer');
	}
}
?>
