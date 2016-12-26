<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {   
	public function index() {
		$this->load->view('front/header');		
		$this->load->view('front/index');
	    $this->load->view('front/footer');	
	}				
	public function post_detail_view() {		
		$this->load->view('front/header');
		$this->load->view('front/detail' );		
		$this->load->view('front/footer');	
	}		
		
	public function check_login(){
		$session = checksession();
		if(empty($session)){
			echo $result = "1";
		} else { 
			echo "continue";
		}
		
	}
	
	
 Public Function social_insert()
 {   
 	$post_id =$_POST['post_id_php'];
 	$session = checksession();
    
    if($_POST['action'] == "message")
 	{   $id = $_POST['post_id_php'];
 		
 		
 		$data = array ( "post_id" => $post_id,
 						"message" =>   $this->input->post('message_to_be_sent'),
 						"message_by" =>$session['register_id']   ,
 						"date" => date('d-m-Y') ,	
 				
 		);
 		
 		$this->load->model('message');
		$this->message->insert_message($data);
 		
 		echo $_POST['action'];
 		
 	}
 	
 	
 	if($_POST['action'] == "share")
 	{   $id = $_POST['post_id_php'];
 	 $share_data = array ( "post_id" => $post_id,
 			"shared_by" =>$session['register_id']   ,
 			"shared_to" =>   $this->input->post('mail_to_be_sent'),
 			"date" => date('d-m-Y') ,            ); 	 	 	$to = $this->input->post('mail_to_be_sent'); 	$subject = "Shared Post";    $msg = anchor('http://www.rojgartimes.com/d_hrpost/welcome/','Your friend hared a link to you',''); 	$headers .= 'From: <test@gmail.com>' . "\r\n"; 	$headers .= "MIME-Version: 1.0\r\n"; 	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 	 	mail($to,$subject,$msg,$headers); 	$this->load->model('share'); 	$this->share->insert_share($share_data);  	 	 }
 	
 	if($_POST['action'] == "like")
 	{
 		$id = $_POST['post_id_php'];
 		$like_data = array ( "post_id" => $post_id,
 				"like_by" =>$session['register_id']   ,
 				"date" => date('d-m-Y') ,
 		 );
 		$this->load->model('like');
 		$this->like->insert_like($like_data);
 		
 	}
 	
 	
 	
 	
 	if($_POST['action'] == "connect")
 	{
 		
 		$id = $_POST['post_id_php'];
 		$connect_data = array ( 
 				"by" =>$session['register_id']   ,
 				"whom" => $post_id,
 				"date" => date('d-m-Y') ,
 		);
 		$this->load->model('connects');
 		$this->connects->insert_connect($connect_data);
 			
 	}
 	
 	
 	
 	
 	
 	
 	

 	if($_POST['action'] == "report")
 	{
 			
 		$id = $_POST['post_id_php'];
 		$report_data = array ( "post_id" => $post_id,
 				"abused_by" =>$session['register_id']   ,
 				"date" => date('d-m-Y') ,
 		
 		);
 		$this->load->model('abouse');
 		$this->abouse->insert_report($report_data);
 	
 	}
 	
 	
 	
 	
 	
 	
 	
 
 	
 }
	
	
}
