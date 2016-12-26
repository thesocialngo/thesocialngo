<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('fronend_logged_in') ){
			redirect('login');
		}
		$this->load->model('user','' ,TRUE);
	}
 	
	public function Index() {
	$session = checksession();
		if(!empty($session))
		{
			$data['username'] = $this->session->userdata('logged_in');
			
			$this->load->view('front/header');
			$this->load->view('front/profile', $data);
			$this->load->view('front/footer');
			
		}
		else {
			redirect('Authusercont/logout');
		}
	
	}
	public function add_post() {
		$this->form_validation->set_rules('title', 'Post Title', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('post_desc', 'Description', 'trim|required');
		$this->form_validation->set_rules('category', 'Post Category', 'required');
		
		$this->load->library('upload');
		$files = $_FILES;
		$this->upload->initialize($this->set_upload_options());
        
        if($this->upload->do_upload() == FALSE && $this->form_validation->run() == FALSE)
		{
			
			$error= array('error'=> $this->form_validation->error_array());
			$error2 = array ('error' => $this->upload->display_errors());
			//Field validation failed.  User redirected to login page
			$session = checksession();
			if(!empty($session))
			{
				$data['username'] = $this->session->userdata('logged_in');
					
			}
			$this->load->view('front/header');
			$this->load->view('front/profile' , $error + $error2 +$data);
			$this->load->view('front/footer');
		}
		else{
			$post_image = $this->upload->data();
			
			$data =  array(
					'title' => $this->input->post('title') ,
					'post_desc' => $this->input->post('post_desc'),
					'category' => $this->input->post('category'),
					'post_image' => $post_image['file_name'],
					'post_user_id' => $this->input->post('post_user_id') ,
					'create_post_date' => date('Y-m-d')
		         );
				 $this->load->model('posts');
				$this->posts->insert_post($data);
				redirect('profile');
		}
	}
	private function set_upload_options()
        {   

            $config = array();
            $config['upload_path'] = 'upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite']     = FALSE;
            return $config;
        }
		
}

