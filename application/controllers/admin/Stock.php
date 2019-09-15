<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_stock');
	}

	public function index()
	{
		$data['stock'] = $this->M_stock->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_stock', $data);
		$this->load->view('admin/V_footer');
	}
}
