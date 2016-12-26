<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //we need to call PHP's session object to access it through CI
class Home extends MX_Controller {
function __construct()
 {
   parent::__construct();
   
 }
public function index()
 {
 	$this->load->library('session');
 	if($this->session->userdata('logged_in'))
   		{
		     $session_data = $this->session->userdata('logged_in');
		     $data['admin_username'] = $session_data['admin_username'];
		 	 $data['admin_id'] = $session_data['admin_id']; 
			 $this->load->view('dashboard', $data);

   		}
   else
   		{
		     //If no session, redirect to login page
		     redirect( admin_url().'/verifylogin', 'refresh');
  		 }
 }
 function logout()
 {
	   $this->load->library('session');
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('home', 'refresh');
 }

}

?>
