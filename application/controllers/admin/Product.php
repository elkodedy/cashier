<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_product');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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
	public function product_update(){
		
		$data['medicine_id'] = $this->input->post('medicine_id');
		$data['medicine_code'] = $this->input->post('medicine_code');
		$data['medicine_name'] = $this->input->post('medicine_name');
		$data['producer'] = $this->input->post('producer');
		$data['children_dosage'] = $this->input->post('children_dosage');
		$data['adult_dosage'] = $this->input->post('adult_dosage');
		$data['single_purchase_price'] = (int) filter_var($this->input->post('single_purchase_price'), FILTER_SANITIZE_NUMBER_INT);
		$data['single_selling_price'] = (int) filter_var($this->input->post('single_selling_price'), FILTER_SANITIZE_NUMBER_INT);
		$data['medicine_description'] = $this->input->post('medicine_description');
		$data['last_update'] = time();

		$this->M_product->product_update($data);		

		redirect('admin/product');
	}
	public function product_add(){
		$this->load->view('admin/V_header');
		$this->load->view('admin/product/v_product_add');
		$this->load->view('admin/V_footer');
	}

	public function product_insert(){
		$this->form_validation->set_rules('medicine_code', 'medicine_code', 'required');
		$this->form_validation->set_rules('medicine_name', 'medicine_name', 'required', array('required' => '*) Nama produk wajib diisi'));
		$this->form_validation->set_rules('single_purchase_price', 'single_purchase_price', 'required', array('required' => '*) Harga beli wajib diisi'));
		$this->form_validation->set_rules('single_selling_price', 'single_selling_price', 'required', array('required' => '*) Harga jual wajib diisi'));
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/V_header');
			$this->load->view('admin/product/V_product_add');
			$this->load->view('admin/V_footer');
		}	
		else{
			$data['medicine_id'] = $this->input->post('medicine_id');
			$data['medicine_code'] = $this->input->post('medicine_code');
			$data['medicine_name'] = $this->input->post('medicine_name');
			$data['producer'] = $this->input->post('producer');
			$data['children_dosage'] = $this->input->post('children_dosage');
			$data['adult_dosage'] = $this->input->post('adult_dosage');
			$data['single_purchase_price'] = $this->input->post('single_purchase_price');
			$data['single_selling_price'] = $this->input->post('single_selling_price');
			$data['medicine_description'] = $this->input->post('medicine_description');
			$data['last_update'] = time();
			// echo "baka";break;
			// print_r($data);break;	
			$this->M_product->product_insert($data);		
		
			redirect('admin/product');
		}	
	}

	public function product_delete(){
		$this->M_product->product_delete($this->input->post('medicine_id'));		
		redirect('admin/product');
	}
}
