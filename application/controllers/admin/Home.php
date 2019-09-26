<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('log') != "login"){
			redirect("/home/login");
		}
		if($this->session->userdata('group') != "1"){
			redirect("/home/login");
		}
	}

	public function index()
	{
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_home');
		$this->load->view('admin/V_footer');
	}
}
