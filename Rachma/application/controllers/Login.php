<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	function index(){
		$this->load->view('Admin/login');
	}

	function aksi_login(){
		$username_admin = $this->input->post('username_admin');
		$password_admin = $this->input->post('password_admin');
		$dataLogin = array(
			'id_admin'=> "1",
			'username_admin' => $username_admin,
			'password_admin' => $password_admin
		);
		$cek = $this->Admin_model->cek_login_Admin("admin", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username_admin' => $username_admin,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(site_url('Belian'));
		}else{
			redirect(site_url('Login'));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Login'));
	}
}
?>