<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect("/home/login");
		}
		if($this->session->userdata('group') != "2"){
			redirect("/home/login");
		}
	}

	public function index()
	{
		// $this->load->view('cashier/V_home');

		$pages['page'] = "views/templates/v_404.php";
		$this->load->view('cashier/V_home', $pages);
	}
}
