<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_purchase');
	}

	public function index() 
	{
		$data['supplier'] = $this->M_purchase->get_supplier();
		$data['medicine_list'] = $this->M_purchase->get_medicine_list();
		$this->load->view('admin/V_header');
		$this->load->view('admin/purchase/V_purchase', $data);
		$this->load->view('admin/V_footer');
	}
	public function purchase(){
		$data['user_id'] = $this->session->userdata("user_id");
		$data['supplier_id'] = $this->input->post("supplier_id");
		// print_r($data);break;
		$data['purchase_transaction_number'] = $this->input->post('purchase_transaction_number');
		$data['date'] = strtotime($this->input->post('date'));
		

		$data['medicine_id'] = $this->input->post('medicine_code');
		$m_i = array();
		$this->M_purchase->get_medicine();
		foreach($data['medicine_id'] as $key => $m_i){
			$d[$key] = $m_i;
		}

		// $data['medicine_name'] = $this->input->post('medicine_name');
		// $data['medicine_code'] = $this->input->post('medicine_code');

		$data['price'] = $this->input->post('price');

		$data['total_price'] = $this->input->post('total_price');
		$d = array();

		foreach($data as $key => $d){$d[$key] = $d;}

		print_r($data);break;
	}

	public function purchase_history()
	{
		$data['purchase_history'] = $this->M_purchase->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/purchase/V_purchase_history', $data);
		$this->load->view('admin/V_footer');
	}

	public function purchase_history_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_purchase->display_purchase_detail($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/purchase_history');
		} 
		else{
			$data['purchaseid'] = $this->M_purchase->display_purchase_detail($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/purchase/V_purchase_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
