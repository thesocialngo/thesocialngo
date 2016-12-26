<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontpage extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user','' ,TRUE);
		
	}
 	public function index()
	{	
		$session = checksession();
		if(!empty($session))
		{
			$this->load->view('header');
			$this->load->view('dashboard');
			$this->load->view('footer');
			
		}
		else {
			redirect('Authusercont/logout');
		}
	}
}
