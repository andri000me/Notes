<?php
class Login_model extends CI_Model{
	//cek email dan password user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM pengguna WHERE email='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
