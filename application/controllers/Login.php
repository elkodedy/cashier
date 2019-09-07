<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->library('form_validation');
		$this->load->helper('array');
	}

	public function index(){
		$this->load->view('V_login');
	}
	

	function aksi_login(){
        $this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		
		// set message form validation
		$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
		<div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->M_login->cek_login("table_users", $where)->num_rows();
			// $user = $this->M_login->cek_login("table_users", $where)->result_array();
			
			foreach ($this->M_login->cek_login("table_users", $where)->result_array() as $user){
				$group = $user['group_id'];
				$name = $user['name'];
			}
				// echo $row['group_id'];
			if($cek > 0){

				$data_session = array(
					'username' => $username,
					'name' => $name,
					'group' => $group,
					'status' => "login",
					);
	 
				$this->session->set_userdata($data_session);
				// print_r($group['group_id']);
				if($group == '1'){
					redirect("/admin/home");
				}
				else
					redirect("/cashier/home");
	 
			} 
			else{
				$this->session->set_flashdata('alert', 'Username / Password Salah!');
			// alert("Username atau Password Tidak Cocok");
				redirect('home/login', 'refresh');
			}
		}
		else{
			$this->session->set_flashdata('alert', 'Username / Password Tidak Boleh Kosong!');
			redirect('home/login', 'refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('home/login');
	}
}
