<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login_akun extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	function index(){
		$this->load->view('Login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$dataLogin = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->User_model->cek_login_pelanggan("Registrasi", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect('Berandauser');
		}else{
			echo "username atau pass salah";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>