<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	function __construct(){
		parent::__construct();	
		if( $this->session->userdata('fronend_logged_in') ){
			redirect('donation');
		}
	}

	public function register_form() {
		$this->load->view('front/header');
		$this->load->view('front/registration');
		$this->load->view('front/footer');
		
	}
	public function insert_form() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[12]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|md5|matches[password]');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('contact', 'Mobile Number', 'trim|required|min_length[10]|max_length[15]');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$error= array('error'=> $this->form_validation->error_array());
			//Field validation failed.  User redirected to login page
			$this->load->view('front/header');
			$this->load->view('front/registration' , $error);
			$this->load->view('front/footer');
		}
		
		else{ 
			$data =  array('first_name' => $this->input->post('first_name') ,
					'last_name' => $this->input->post('last_name') ,
					'email' => $this->input->post('email') ,
					'password' => $this->input->post('password'),
					'dob' => $this->input->post('dob'),
					'contact' => $this->input->post('contact'), 
					'country' => $this->input->post('country'),
					'registration_date' => date('Y-m-d')
		         );
				$this->load->model('register_form');
				$this->register_form->insert_form($data);
				$datas = $this->db->query("SELECT MAX(id) FROM register")->result_array();
			
				foreach($datas as $row) {
					 $reg_id = $row['MAX(id)'];
				}
				
				$data_user = array(
					'register_id' => $reg_id ,
					'username' => $this->input->post('email') ,
					'password' => $this->input->post('password') ,
					'status' => '0'
					);
					$this->register_form->select_reg_id($data_user);
					$this->session->set_userdata('logged_in', $data_user); 					redirect('profile' , $message );
		}
	}
	
}
