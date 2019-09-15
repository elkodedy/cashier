<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selling_histori extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_selling_histori');
	}

	public function index()
	{
		$data['selling_histori'] = $this->M_selling_histori->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_selling_histori', $data);
		$this->load->view('admin/V_footer');
	}
}
