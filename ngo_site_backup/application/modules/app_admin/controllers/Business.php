<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Business extends CI_Controller {
 function __construct()
 {
  parent::__construct();
  unauthonticate_request();
  $this->load->model('business_model','',TRUE);     
 }
 public function new_business()
 {
 	$single['app'] = array();
 	$this->load->view('header');
 	$this->load->view('business',$single);
 	$this->load->view('footer');
 }
 public function edit_business()
 {
 	$id = $this->input->get('url');
 	$single['app'] = $this->business_model->single_business($id);
 	$this->load->view('header');
 	$this->load->view('business',$single);
 	$this->load->view('footer');
 }
 public function delete_business() 
 {
 	$id =  $this->input->get('url');
 	$this->db->where('id', $id);
 	$this->db->delete('business');
 	redirect(admin_url().'/business/view_business');
 }
	function do_upload(){
 	$this->load->library('upload'); 
 	$files = $_FILES;
 	$cpt = count($_FILES['image']['name']);
		for($i=0; $i<$cpt; $i++)
		{
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
  public function add_business()
 {
	$id = $this->input->get('url');
	$this->load->library('form_validation');
 	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('item', 'Item', 'required|trim');
    $this->form_validation->set_rules('state', 'State', 'required|trim');
    $this->form_validation->set_rules('city', 'City', 'required|trim');
    $this->form_validation->set_rules('landmark', 'Specify any landmark', 'required|trim');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('location', 'Pickup location', 'required');
	$this->form_validation->set_rules('description', 'Description', 'required');
	if($this->form_validation->run() == FALSE) 
	{	
		$error['error'] = validation_errors();
		$single['app'] = array();
		$this->load->view('header' , $single);
		$this->load->view('business', $error);
		$this->load->view('footer');
	} else {
		$this->load->library('upload');
		$files = $_FILES;
		$file_nm = 'pro_img';
		$this->upload->initialize($this->set_upload_options());
		if( $this->upload->do_upload($file_nm) == FALSE && $this->form_validation->run() == FALSE) {
		$data2['error'] = array ('error' => $this->upload->display_errors());
		$error2 = validation_errors();
		$this->load->library('session');
		$single['app'] = array();
		$this->load->view('header' , $single);
		$this->load->view('business', $error2 );
		$this->load->view('footer');
	} else {
		$data = $this->upload->data();
	}	
		$this->db->select_max('id');
		$this->db->select('image');
		$result  =$this->db->get_where('business')->result();
	    foreach ($result as $key => $value) {
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
		if( $this->upload->do_upload($file_nm) != FALSE && $this->form_validation->run() != FALSE)
		{
			$dataimage = array('image' =>  $data['file_name']);
		}
			$dataarray = array (
			'item' => $this->input->post('item'),
			'name' => $this->input->post('name'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'landmark' => $this->input->post('landmark'),
			'phone' => $this->input->post('phone'),
			'location' => $this->input->post('location'),
			'description' => $this->input->post('description'),
			'upload_date' => date('Y-m-d')
			 );
			
			 $this->business_model->update_business($dataarray , $id , $dataimage);		
				}
	else 
	{
		$dataarray = array (
		'id' => $max_id_insert,
		'image' => $data['file_name'],
		'item' => $this->input->post('item'),
			'name' => $this->input->post('name'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'landmark' => $this->input->post('landmark'),
			'location' => $this->input->post('location'),
			'phone' => $this->input->post('phone'),
			'description' => $this->input->post('description'),
		'upload_date' => date('Y-m-d')
				);
				$this->business_model->add_business($dataarray);
			}
			  
				
				redirect('app_admin/business/view_business');
				}
							
 }
 
        public function view_business() { 
		
			$data['app'] = $this->business_model->all_business();
			$this->load->view('header');
			$this->load->view('view_business', $data);
			$this->load->view('footer');
		}
}
?>







