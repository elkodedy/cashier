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
		$this->load->view('admin/purchase/V_purchase_histori', $data);
		$this->load->view('admin/V_footer');
	}

	public function purchase_histori_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_purchase_histori->display_purchase_detail($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/purchase_histori');
		} 
		else{
			$data['purchaseid'] = $this->M_purchase_histori->display_purchase_detail($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/purchase/V_purchase_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
