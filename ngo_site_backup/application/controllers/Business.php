<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Business extends CI_Controller {
	
	public function __construct(){       
		parent::__construct();       
		$this->load->model('Business_by_user','' ,TRUE);
		$this->load->library('session','' ,TRUE);
	}
	
	public function Index() {
	    
			$data_final['app_data'] = $this->Business_by_user->downloaded_data();
		  	$this->load->view('front/header');
		  	$this->load->view('front/market',$data_final);
		  	$this->load->view('front/footer');	
		
	}
	
	/*
    public function download_by(){
		$loged_user_id =$this->input->post('loged_user');
		$id =$this->input->post('id');
		$date= date('d-m-Y');
		$data_download_app =array('download_by'=>$loged_user_id,
		  'id'=>$id,
			'download_on'=> $date
		  );
      $this->load->model('downloads_by_user'); 
      $this->downloads_by_user->insert_download_by($data_download_app);
	}
	*/
	
	public function new_business(){
 		$single['app'] = array();
 		$this->load->view('front/header');
 		$this->load->view('front/business',$single);
 		$this->load->view('front/footer');
 	}
	
	public function edit_business(){
		$id = $this->input->get('url');
		$single['app'] = $this->Business_by_user->single_business($id);
		$this->load->view('front/header');
		$this->load->view('front/business',$single);
		$this->load->view('front/footer');
 	}
	
	public function delete_business(){
		$id =  $this->input->get('url');
		$this->db->where('id', $id);
		$this->db->delete('business');
		redirect('business');
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
	
	public function add_business(){
		
		$id = $this->input->get('url');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('description', 'description', 'required|trim');
		$this->form_validation->set_rules('item', 'item', 'required');
		$this->form_validation->set_rules('state', 'state', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('landmark', 'landmark', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		if($this->form_validation->run() == FALSE)
		{	$data_final['app_data'] = $this->Business_by_user->downloaded_data();
			$error['error'] = validation_errors();
			$single['app'] 	= array();
			$this->load->view('front/header' , $single);
			$this->load->view('front/market', $error+$data_final);
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
				$this->load->library('session');
				$single['app'] = array();
				$this->load->view('front/header' , $single);
				$this->load->view('front/market', $error2 );
				$this->load->view('front/footer');
			} else {
				$data = $this->upload->data();
			}	
			$this->db->select_max('id');
			$this->db->select('image');
			$result  = $this->db->get_where('business')->result();
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
					'description' => $this->input->post('description'),
					'item' => $this->input->post('item'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'landmark' => $this->input->post('landmark'),
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'upload_date' => date('Y-m-d')
				 );
				$this->Business_by_user->update_business($dataarray , $id , $dataimage);		
			} else {
				$dataarray = array (
					'id' => $max_id_insert,
					'image' => $data['file_name'],
					'description' => $this->input->post('description'),
					'item' => $this->input->post('item'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'landmark' => $this->input->post('landmark'),
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'upload_date' => date('Y-m-d')
				);
				$this->Business_by_user->add_business($dataarray);
			}
		redirect('business');
		}
	}
}