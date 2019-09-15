<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_supplier');
	}

	public function index()
	{
		$data['supplier'] = $this->M_supplier->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_supplier', $data);
		$this->load->view('admin/V_footer');
	}
}
