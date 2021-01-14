<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		// $this->load->model('admin/M_user');
		$this->load->model('admin/M_home');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data['sum_purchase_transaction'] = $this->M_home->sum_purchase_transaction();
		$data['sum_selling_transaction'] = $this->M_home->sum_selling_transaction();
		$data['profit'] = $this->M_home->profit();

		$this->load->view('admin/V_header');
		$this->load->view('admin/finance/V_finance', $data);
		$this->load->view('admin/V_footer');
	}
}
