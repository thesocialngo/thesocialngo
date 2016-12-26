<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Apps extends CI_Controller {
function __construct()
 {
  parent::__construct();
  unauthonticate_request();
  $this->load->model('App_model','',TRUE);     
 }
public function new_apps()
 {  
 	$this->load->model('category');
 	$data['all_cat']=$this->category->all_category();
 	$single['app'] = array();
 	$this->load->view('header');
 	$this->load->view('application',$single + $data);
 	$this->load->view('footer');
 }
 public function edit_apps()
 {
 	$this->load->model('category');
 	$data['all_cat']=$this->category->all_category();
 	$id = $this->input->get('url');
 	$single['app'] = $this->App_model->single_apps($id);
 	$this->load->view('header');
 	$this->load->view('application',$single +$data);
 	$this->load->view('footer');
 }
 public function delete_apps() 
 {
 	$id =  $this->input->get('url');
 	$this->db->where('id', $id);
 	$this->db->delete('applications');
 	redirect(admin_url().'/apps/view_apps');
 }
 public function delete_users()
 {
 	$id =  $this->input->get('url1');
 	$this->db->where('id', $id);
 	$this->db->delete('register');
 	redirect(admin_url().'/apps/view_regis_user');
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
 private function set_upload_options()
 {
 	$config = array();
 	$config['upload_path'] = 'upload/';
 	$config['allowed_types'] = 'gif|jpg|png|JPG|PNG|jpeg|JPEG';
 	$config['overwrite']     = FALSE;
 	return $config;
 }
  public function add_apps()
 {
	$id = $this->input->get('url');
	$this->load->library('form_validation');
 	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('item', 'item', 'required|trim');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
	$this->form_validation->set_rules('state', 'State', 'required|trim');
    $this->form_validation->set_rules('city', 'City', 'required|trim');
    $this->form_validation->set_rules('location', 'Loction', 'required|trim');
	$this->form_validation->set_rules('description', 'Description', 'required');
	if($this->form_validation->run() == FALSE) 
	{	
		$error['error'] = validation_errors();
		$single['app'] = array();
		$this->load->view('header' , $single);
		$this->load->view('application',$error);
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
		$this->load->view('application', $error2 );
		$this->load->view('footer');
	} else {
		$data = $this->upload->data();
	}	
		$this->db->select_max('id');
		$this->db->select('image');
		$result  =$this->db->get_where('applications')->result();
	    foreach ($result as $key => $value) {
	    $max_id_insert=  $value->id + 1;
    }
	     $this->db->select('image');
	     $this->db->from('applications');
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
			'location' => $this->input->post('location'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'phone' => $this->input->post('phone'),
			'description' => $this->input->post('description'),
			'upload_date' => date('Y-m-d')
			 );
			
			 $this->App_model->update_apps($dataarray , $id , $dataimage);		
				}
	else 
	{
		$dataarray = array (
		'id' => $max_id_insert,
		'image' => $data['file_name'],
		'item' => $this->input->post('item'),
		'state' => $this->input->post('state'),
		'city' => $this->input->post('city'),
		'name' => $this->input->post('name'),
		'location' => $this->input->post('location'),
		'phone' => $this->input->post('phone'),
		'description' => $this->input->post('description'),
		'upload_date' => date('Y-m-d')
				);
				$this->App_model->add_app($dataarray);
			}
			  
				
				redirect('app_admin/apps/view_apps');
				}
							
 }
 
        public function view_apps() { 
		
			$data['app'] = $this->App_model->all_app();
			$this->load->view('header');
			$this->load->view('view_apps', $data);
			$this->load->view('footer');
		}
        
		public function view_regis_user() { 
		 	$data['app'] = $this->App_model->all_user();
			$this->load->view('header');
			$this->load->view('view_users', $data);
			$this->load->view('footer');
		}
		public function downloads_by_app() {
			$id = $this->input->get('url');
			$this->load->model('Downloads_by_user');
	  		$data_final['app_data'] = $this->Downloads_by_user->downloaded_by_app($id);
	  		$this->load->view('header');
	  		$this->load->view('view_all_download_by_app',$data_final);
	  		$this->load->view('footer');
		}
		
		
		public function dnld_by_user() {
			$dnldr_id = $this->input->get('url');
			$this->load->model('Downloads_by_user');
	  		$data_final['app_data'] = $this->Downloads_by_user->dnld_by_user($dnldr_id);
	  		$this->load->view('header');
	  		$this->load->view('view_all_download_by_user',$data_final);
	  		$this->load->view('footer');
		}
}
?>







