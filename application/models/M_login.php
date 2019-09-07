<?php 

class M_login extends CI_Model{	

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function cek_group($table,$where){
		return $this->db->get_where($table,$where);
	}
    // public function VerifyLogin(){           
	// 	$this->form_validation->set_rules('InputUsername', 'Username', 'required');
	// 	$this->form_validation->set_rules('InputPassword', 'Password', 'required|callback_CheckPassword');

	// 	if ($this->form_validation->run())
	// 	{   
	// 		echo 'login sukses';
	// 	}
	// 	else
	// 	{
	// 		echo 'login gagal';
	// 	}   
	// }
}