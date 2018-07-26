<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login()
	{
		// http://localhost/atdatop/users/login
		// $this->load->library('form_validation');
		$data['title'] = 'Login';
		$this->load->view('login_view',$data);
	}

	public function login_validation()
	{
		// http://localhost/atdatop/users/login_validation

		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('User_model');
			if($this->User_model->login($username, $password)) {
				$session_data = array(
					'username' => $username
					);

				$this->session->set_userdata($session_data);
				redirect(base_url(). 'users/enter');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() .'users/login');
			}

		} else {
			$this->login();
		}	
	}

	public function enter() {
		if($this->session->userdata('username') != '') {
			redirect(base_url().'home/homepage');
		} else {
			redirect(base_url() .'users/login');
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		redirect(base_url() . 'users/login');
	}
}
