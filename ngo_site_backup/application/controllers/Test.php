<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {
 	       
	public function check_login() {
		$session = checksession();
		if(empty($session))
		{
			$this->session->set_flashdata('message', 'Please First Login');
			   if($this->session->flashdata('message')) {
				    $check_login_msg['error'] = $this->session->flashdata('message');
				   $this->load->view('front/header');
				   $this->load->view('front/index', $check_login_msg);
				   $this->load->view('front/footer');
				   
			   }
  
		}
		else {
			
			echo "not login";
		}
		
	}
	
}
