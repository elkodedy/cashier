<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selling extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_selling');
		$this->load->model('admin/M_home');
	}

	public function index()
	{
		$data['selling_history'] = $this->M_selling->displayrecords();
		$data['sum_selling_transaction'] = $this->M_home->sum_selling_transaction();
		$this->load->view('admin/V_header');
		$this->load->view('admin/selling/V_selling_history', $data);
		$this->load->view('admin/V_footer');
	}

	public function selling_history_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_selling->display_selling_detail($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/selling_history');
		} 
		else{
			$data['sellingid'] = $this->M_selling->display_selling_detail($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/selling/V_selling_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
