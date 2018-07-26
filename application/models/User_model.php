<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('users');

		//select * from users where username = '$username' and password = '$password'

		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
}