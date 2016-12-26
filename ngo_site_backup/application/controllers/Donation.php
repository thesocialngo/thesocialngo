<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Donation extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Donation_by_user','' ,TRUE);
	}
public function Index() {
      	$data_final['app_data'] = $this->Donation_by_user->downloaded_data();
	  	$this->load->view('front/header');
	  	$this->load->view('front/view_donation',$data_final);
	  	$this->load->view('front/footer');		
	}
		public function new_donation(){
 		$single['app'] = array();
 		$this->load->view('front/header');
 		$this->load->view('front/donation',$single);
 		$this->load->view('front/footer');
 	}
	
	public function edit_donation(){
		$id = $this->input->get('url');
		$single['app'] = $this->Donation_by_user->single_donation($id);
		$this->load->view('front/header');
		$this->load->view('front/donat',$single);
		$this->load->view('front/footer');
 	}
	
	public function delete_donation(){
		$id =  $this->input->get('url');
		$this->db->where('id', $id);
		$this->db->delete('applications');
		redirect('donation');
	}
	
	public function do_upload(){
 		$this->load->library('upload'); 
 		$files = $_FILES;
 		$cpt = count($_FILES['image']['name']);
		for($i=0; $i<$cpt; $i++){
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
		}
 	}

 	private function set_upload_options(){
 		$config = array();
 		$config['upload_path'] = 'upload/';
 		$config['allowed_types'] = 'gif|jpg|png|JPG|PNG|jpeg|JPEG';
 		$config['overwrite']     = FALSE;
 		return $config;
 	}
	
	public function add_donation(){
		$this->load->model('Donation_by_user');
		$id = $this->input->get('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('item', 'Item', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('location', 'location', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if($this->form_validation->run() == FALSE)
		{	
			$data_final['app_data'] = $this->Donation_by_user->downloaded_all_data();
			$error['error'] = validation_errors();
			$single['app'] 	= array();
			$this->load->view('front/header' , $single);
			$this->load->view('front/donate', $error+$data_final);
			$this->load->view('front/footer');
		} else {
			
			$this->load->library('upload');
			$files = $_FILES;
			$file_nm = 'pro_img';
			$this->upload->initialize($this->set_upload_options());
			if( $this->upload->do_upload($file_nm) == FALSE && $this->form_validation->run() == FALSE)
			{
				$data2['error'] = array ('error' => $this->upload->display_errors());
				$error2 = validation_errors(); 
				$single['app'] = array();
				$this->load->view('front/header' , $single);
				$this->load->view('front/view_donation', $error2 );
				$this->load->view('front/footer');
			} else {
				$data = $this->upload->data();
			}	
			$this->db->select_max('id');
			$this->db->select('image');
			$result  = $this->db->get_where('applications')->result();
			foreach ($result as $key => $value) 
			{
				$max_id_insert =  $value->id + 1;
    		}
			$this->db->select('image');
			$this->db->from('business');
			$this->db->where('id', $id);
			$query = $this->db->get();
			$user_result = $query->result();
			foreach ($user_result as $key => $value) {
			$image = $value->image;
   		}
			if($id)
			{
				$dataimage = array('image' =>$image);
				if($this->upload->do_upload($file_nm) != FALSE && $this->form_validation->run() != FALSE)
				{
					$dataimage = array('image' =>  $data['file_name']);
				}
				$dataarray = array (
					'item' => $this->input->post('item'),
					'name' => $this->input->post('name'),
					'location' => $this->input->post('location'),
					'phone' => $this->input->post('phone'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'description' => $this->input->post('description'),
					'upload_date' => date('Y-m-d')
				 );
				$this->Donation_by_user->update_donation($dataarray , $id , $dataimage);		
			} else {
				$dataarray = array (
					'id' => $max_id_insert,
					'image' => $data['file_name'],
					'item' => $this->input->post('item'),
					'name' => $this->input->post('name'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'phone' => $this->input->post('phone'),
					'location' => $this->input->post('location'),
					'description' => $this->input->post('description'),
					'upload_date' => date('Y-m-d')
				);
				$this->Donation_by_user->add_donation($dataarray);
			}
		redirect('donate');
		}
	}
}