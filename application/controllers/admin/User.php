<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('admin/M_user');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data['user'] = $this->M_user->displayrecords();
		$this->load->view('admin/V_header');
		$this->load->view('admin/user/V_user', $data);
		$this->load->view('admin/V_footer');
	}

	public function user_detail(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_user->display_user($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/user');
		} 
		else{
			$data['userid'] = $this->M_user->display_user($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/user/V_user_detail', $data);
			$this->load->view('admin/V_footer');
		}
	}

	public function user_edit(){
		$id = $this->input->get('id');
		$this->data['keys'] = $this->M_user->display_user($id);
		if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
			redirect('admin/user');
		} 
		else{
			$data['userid'] = $this->M_user->display_user($id);
			$this->load->view('admin/V_header');
			$this->load->view('admin/user/V_user_edit', $data);
			$this->load->view('admin/V_footer');
		}
	}
	public function user_update(){
		
		$data['user_id'] = $this->input->post('user_id');
		$data['registration_id'] = $this->input->post('registration_id');
		$data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['created_on'] = strtotime($this->input->post('created_on'));
		$data['status'] = $this->input->post('status');
		$data['group_id'] = $this->input->post('group');
		$data['address'] = $this->input->post('address');
		$data['last_update'] = time();
		$this->M_user->user_update($data);		

		redirect('admin/user');
	
	}
	public function user_password_update(){	
		$this->form_validation->set_rules('username', 'username', 'required', array('required' => '*) Username wajib diisi'));
		$this->form_validation->set_rules('password','Password','required|min_length[6]', array('required' => '*) Password wajib diisi', 'min_length' => '*) Password Minimal 6 Karakter'));
		$this->form_validation->set_rules('confirmnewpassword','Password Konfirmasi','required|matches[password]', array('required' => '*) Password Konfirmasi wajib diisi', 'matches' => '*) Password Konfirmasi tidak valid'));
		
		if ($this->form_validation->run() == TRUE) {
			$data['user_id'] = $this->input->post('user_id');
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$this->M_user->user_update($data);		
			// $this->session->set_flashdata('notif_success','Data Pengguna <b>'.$data['name'].'</b> Berhasil Di Ubah!');
			redirect('admin/user');

		}
		else{
			$id = $this->input->post('user_id');
			$this->data['keys'] = $this->M_user->display_user($id);
			if(!isset($this->data['keys'][0]) || $this->data['keys'][0] == ""){
				redirect('admin/user');
			} 
			else{
				$data['userid'] = $this->M_user->display_user($id);
				$this->load->view('admin/V_header');
				$this->load->view('admin/user/V_user_edit', $data);
				$this->load->view('admin/V_footer');
			}
		}	
	}

	public function user_add(){
		$this->load->view('admin/V_header');
		$this->load->view('admin/user/V_user_add');
		$this->load->view('admin/V_footer');
	}

	public function user_insert(){
		$this->form_validation->set_rules('registration_id', 'registration_id', 'required');
		$this->form_validation->set_rules('name', 'name', 'required', array('required' => '*) Nama wajib diisi'));
		$this->form_validation->set_rules('ktp_number', 'ktp_number', 'required', array('required' => '*) Nomor KTP wajib diisi'));
		$this->form_validation->set_rules('phone', 'phone', 'required', array('required' => '*) Nomor telepon wajib diisi'));
		$this->form_validation->set_rules('created_on', 'created_on', 'required');
		$this->form_validation->set_rules('status', 'status', 'required', array('required' => '*) Status telepon wajib diisi'));
		$this->form_validation->set_rules('group', 'group', 'required', array('required' => '*) Grup telepon wajib diisi'));
		$this->form_validation->set_rules('address', 'address', 'required'	, array('required' => '*) Alamat wajib diisi'));
		
		$this->form_validation->set_rules('username', 'username', 'required'	, array('required' => '*) Username wajib diisi'));
		$this->form_validation->set_rules('password','Password','required|min_length[6]', array('required' => '*) Password wajib diisi', 'min_length' => '*) Password Minimal 6 Karakter'));
		$this->form_validation->set_rules('confirmnewpassword','Password Konfirmasi','required|matches[password]', array('required' => '*) Password Konfirmasi wajib diisi', 'matches' => '*) Password Konfirmasi tidak valid'));
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/V_header');
			$this->load->view('admin/user/V_user_add');
			$this->load->view('admin/V_footer');
		}	
		else{
			$data['user_id'] = $this->input->post('user_id');
			$data['registration_id'] = $this->input->post('registration_id');
			$data['name'] = $this->input->post('name');
			$data['ktp_number'] = $this->input->post('ktp_number');
			$data['phone'] = $this->input->post('phone');
			$data['created_on'] = strtotime($this->input->post('created_on'));
			$data['status'] = $this->input->post('status');
			$data['group_id'] = $this->input->post('group');
			$data['address'] = $this->input->post('address');
		
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
		
			$this->M_user->user_insert($data);		
		
			redirect('admin/user');
		}	
	}

	public function user_delete(){
		$this->M_user->user_delete($this->input->post('user_id'));		
		redirect('admin/user');
	}

}
