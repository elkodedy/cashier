<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_product');
	}

	public function index()
	{
		$data['product'] = $this->M_product->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_product', $data);
		$this->load->view('admin/V_footer');
	}
}
