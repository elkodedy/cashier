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
		$this->load->view('admin/selling/V_selling_histori', $data);
		$this->load->view('admin/V_footer');
	}

	public function selling_histori_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_selling_histori->display_selling_detail($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/selling_histori');
		} 
		else{
			$data['sellingid'] = $this->M_selling_histori->display_selling_detail($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/selling/V_selling_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}
}
