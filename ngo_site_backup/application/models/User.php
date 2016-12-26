<?php
class User extends CI_Model { 
public function login($username, $password)
 {
	$query = $this->db->query("SELECT * FROM user_admin WHERE username = '".$username."' AND password = '".md5($password)."'");
   if($query -> num_rows() >= 1)
   {
   return  $query->result();
   }
   else
   {
     return false;
	}
	}
	public function login_user($username, $password)
	{
		$query = $this->db->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".md5($password)."'");
		if($query -> num_rows() >= 1)
		{
			return  $query->result();
		}
		else
		{
			return false;
		}
	}	
}
