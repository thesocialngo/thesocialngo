<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 function checksession() {
 	
 }
function admin_url() {
 	$administrator_url = base_url()."index.php/app_admin";
 	return $administrator_url;
 	 }
 
 function unauthonticate_request() {
 	$ci =& get_instance();
 	 $session_data = $ci->session->userdata('logged_in');
 	 $data['admin_username'] = $session_data['admin_username'];
 	 $data['admin_id'] = $session_data['admin_id'];
 	if(empty($data['admin_id']))
 	{
 	 redirect( admin_url().'/verifylogin', 'refresh');
 	}
 } 