<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		$this->load->view('Registrasi');
	}

//--------------------------------------------------
	//tambahAkun
	public function tambah_akun(){
		$data = array('action' =>site_url('user/tambah_Akun_Aksi'),
			'nama'=>set_value('nama'),
			'alamat'=>set_value('alamat'),
			'no_hp' => set_value('no_hp'),
			'username' => set_value('username'),
			'password' =>set_value('password'),
			'id'=>set_value('id')
		);
		$this->load->view('Registrasi', $data);
	}
	function tambah_Akun_Aksi(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')

			
		);
		$this->User_model->tambahAkun($data);
		redirect(site_url('BerandaUser'));
	}
//------------------------------------
}
?>