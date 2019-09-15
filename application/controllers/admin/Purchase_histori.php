<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_histori extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_purchase_histori');
	}

	public function index()
	{
		$data['purchase_histori'] = $this->M_purchase_histori->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_purchase_histori', $data);
		$this->load->view('admin/V_footer');
	}
}
