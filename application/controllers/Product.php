<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function addProduct() {

		$data['title'] = 'Product';
		$this->load->view('common/header_view',$data);
		$this->load->view('products/add_product_view',$data);
		$this->load->view('common/footer_view',$data);

	}



}
