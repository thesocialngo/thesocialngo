<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller{

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('front/header');		
		$this->load->view('front/contact');
	    $this->load->view('front/footer');	
	}
	public function sendmessage(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('message', 'Message', 'trim');
		if($this->form_validation->run()){
			$data =  array(
					'name' 		=> $this->input->post('name') ,
					'email' 	=> $this->input->post('email') ,
					'phone' 	=> $this->input->post('phone') ,
					'message' 	=> $this->input->post('message'),
					'date' 		=> date('Y-m-d h:i:s')
		    );
			$this->load->model('my_contact');
			if($this->my_contact->insert_form($data)){
				
				$to = "shubhammathur707@gmail.com";
				$subject = "For contact enquiry";
				
				$message = "
				<body>
				<table>
				<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Message</th>
				</tr>
				<tr>
				<td>".$name."</td>
				<td>".$email."</td>
				<td>".$phone."</td>
				<td>".$message."</td>
				</tr>
				</table>
				</body>
				";
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				// More headers
				$headers .= 'From: <'.$email.'>' . "\r\n";
				mail($to,$subject,$message,$headers);
				$this->session->set_flashdata('sendmessage','Thank You.');
				redirect('contact');
			}
		} else {
			$this->session->set_flashdata('sendmessage','Please fill correct all informations.');
			redirect('contact');
		}
	}
}
?>