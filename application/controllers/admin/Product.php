<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_product');
	}

	public function index()
	{
		$data['product'] = $this->M_product->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/product/V_product', $data);
		$this->load->view('admin/V_footer');
	}
	public function product_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_product->display_product($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/product');
		} 
		else{
			$data['productid'] = $this->M_product->display_product($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/product/V_product_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}

	public function product_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_product->display_product($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/product');
		} 
		else{
			$data['productid'] = $this->M_product->display_product($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/product/V_product_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
