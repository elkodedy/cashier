<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_stock');
	}

	public function index()
	{
		$data['stock'] = $this->M_stock->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/stock/V_stock', $data);
		$this->load->view('admin/V_footer');
	}
	public function stock_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_stock->display_stock($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/stock');
		} 
		else{
			$data['stockid'] = $this->M_stock->display_stock($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/stock/V_stock_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}

	public function stock_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_stock->display_stock($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/stock');
		} 
		else{
			$data['stockid'] = $this->M_stock->display_stock($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/stock/V_stock_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
