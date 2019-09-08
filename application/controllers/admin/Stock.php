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
		$pages['page'] = "views/admin/v_stock.php";
		$this->load->view('admin/V_home', $pages);
	}
}
