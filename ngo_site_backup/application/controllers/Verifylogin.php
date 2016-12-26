 <?php  /*
defined('BASEPATH') OR exit('No direct script access allowed');
class Verifylogin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user','' ,TRUE);
	 }
 	public function index()
	{	 $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
		if($this->form_validation->run() == FALSE)
		{ 
			$error= array('error'=> $this->form_validation->error_array());
			//Field validation failed.  User redirected to login page
			$this->load->view('front/header');
			$this->load->view('front/login' , $error);
			$this->load->view('front/footer');
		}
		
	}
		function check_database($password)
		{//Field validation succeeded.  Validate against database
			$username = $this->input->post('username');
			//query the database
			$result = $this->user->login_user($username, $password);
			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
							'loged_user_id' => $row->register_id,
							'username' => $row->username,
							'logged_in' => TRUE
					);
				$this->session->set_userdata('fronend_logged_in', $sess_array);
		 	}
				$url = $this->input->post('redirect');
		 		redirect($url);
		 		return true;
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Invalid username or password');
				redirect('login');
				return false;
			}
		
	}
} */