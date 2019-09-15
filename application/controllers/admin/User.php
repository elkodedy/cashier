<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
		parent::__construct();
		$this->load->model('admin/M_user');
	}

	public function index()
	{
		$data['user'] = $this->M_user->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/V_user', $data);
		$this->load->view('admin/V_footer');
	}
}
