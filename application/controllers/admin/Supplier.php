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
		$this->load->view('admin/supplier/V_supplier', $data);
		$this->load->view('admin/V_footer');
	}
	
	public function supplier_update(){	
		$data['supplier_id'] = $this->input->post('supplier_id');
		$data['supplier_name'] = $this->input->post('supplier_name');
		$data['phone'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['last_update'] = time();
	
		// print_r($data);break;
		$this->M_supplier->supplier_update($data);		
	
		redirect('admin/supplier');
	
	}

	public function supplier_insert(){
		$data['supplier_id'] = $this->input->post('supplier_id');
		$data['supplier_name'] = $this->input->post('supplier_name');
		$data['phone'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['last_update'] = time();

		$this->M_supplier->supplier_insert($data);		
	
		redirect('admin/supplier');
	}

	public function supplier_delete(){
		$this->M_supplier->supplier_delete($this->input->post('supplier_id'));		
		redirect('admin/supplier');
	}
}
