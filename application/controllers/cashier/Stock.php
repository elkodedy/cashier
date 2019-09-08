<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('cashier/M_stock');
		if($this->session->userdata('status') != "login"){
			redirect("/home/login");
		}
		if($this->session->userdata('group') != "2"){
			redirect("/home/login");
		}
	}

	public function index()
	{
		$pages['page'] = "views/cashier/v_stock.php";
		$this->load->view('cashier/V_home', $pages);
	}
}
