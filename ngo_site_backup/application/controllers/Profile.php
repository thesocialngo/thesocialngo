<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
	public function __construct()
	{       parent::__construct();       
	$this->load->model('Downloads_by_user','' ,TRUE);    
	}
	public function Index() {
	  $session = checksession();
		if(!empty($session))
		{   
		$data_final['app_data'] = $this->Downloads_by_user->downloaded_data();
		  $this->load->view('front/header');
		  $this->load->view('front/profile',$data_final);
		  $this->load->view('front/footer');	
		}
		else {
			redirect('Authusercont/logout');
		}
	}
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
}