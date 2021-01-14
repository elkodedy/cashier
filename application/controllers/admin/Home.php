<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('log') != "login"){
			redirect("/home/login");
		}
		if($this->session->userdata('group') != "1"){
			redirect("/home/login");
		}
		$this->load->model('admin/M_home');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['users'] = $this->M_home->count_users();
		$data['suppliers'] = $this->M_home->count_suppliers();
		$data['purchase_transaction'] = $this->M_home->count_purchase_transaction();
		$data['selling_transaction'] = $this->M_home->count_selling_transaction();
		$data['stock'] = $this->M_home->sum_stock();
		$data['sum_purchase_transaction'] = $this->M_home->sum_purchase_transaction();
		$data['sum_selling_transaction'] = $this->M_home->sum_selling_transaction();
		$data['profit'] = $this->M_home->profit();

		$this->load->view('admin/V_header');
		$this->load->view('admin/V_home', $data);
		$this->load->view('admin/V_footer');
	}
}
