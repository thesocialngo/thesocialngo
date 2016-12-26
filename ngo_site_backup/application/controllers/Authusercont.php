<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Authusercont extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
  public function logout()
	{   $logout_to = base64_decode($this->input->get('url'));
	
	 if($logout_to == 'admin_panel')
	 {  session_destroy();   
	   redirect( admin_url().'/verifylogin', 'refresh');
	  }
	 if($logout_to == 'frontend')
	 { session_destroy();   
	   redirect('welcome', 'refresh');
	 }
	 else{	 
		session_destroy();
		redirect('welcome', 'refresh');
	  }
	}
}