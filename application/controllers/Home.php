<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		// TODO : tampilkan landing page bagi user yang belum daftar
        // $this->render("landing_page");
        $this->load->view('templates/V_header');
        $this->load->view('V_landing_page');
        $this->load->view('templates/V_footer');
    }
    
    public function login(){
        $this->load->view('templates/V_header');
        $this->load->view('V_login');
        $this->load->view('templates/V_footer');

    }
}
