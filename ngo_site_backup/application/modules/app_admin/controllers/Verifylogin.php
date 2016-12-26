<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Verifylogin extends CI_Controller {
function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
public function index()
 {
  //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect(admin_url().'/home');
   }
 }
 function check_database($password)
 { 
   //Field validation succeeded.  Validate against database
      $username = $this->input->post('username');
  //query the database
 $result = $this->user->login($username, $password);
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'admin_id' => $row->id,
		 'admin_username' => $row->username,
		 'logged_in' => TRUE
       );
	$this->load->library('session');
	$this->session->set_userdata('logged_in', $sess_array);
	 }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>