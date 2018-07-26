<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function homepage() {

		$data['title'] = 'Homepage';
		$this->load->view('common/header_view',$data);
		$this->load->view('home/homepage_view',$data);
		$this->load->view('common/footer_view',$data);

	}

}
