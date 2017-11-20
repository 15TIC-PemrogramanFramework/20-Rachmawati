<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Profil_user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');	
	}

	function index(){
		$username = $this->session->userdata('username');
		$data['data_user'] = $this->user_model->ambil_dataAkun_yangsudahlogin($username);
		$this->load->view('Profil',$data);
	}

//edit akun
	function edit($id){
		$data_edit=$this->User_model->ambil_data_id($id);
		$data=array(

		'id'=>set_value('id',$data_edit[0]->id),
		'nama'=>set_value('nama',$data_edit[0]->nama),
		'alamat'=>set_value('alamat',$data_edit[0]->alamat),
		'no_hp'=>set_value('no_hp',$data_edit[0]->no_hp),
		'username'=>set_value('username',$data_edit[0]->username),
		'password'=>set_value('password',$data_edit[0]->password),
		'action'=>site_url('profil_user/edit_aksi'),
		'button'=>'perbaharui'
		);
		$this->load->view('edit_profil',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'no_hp'=>$this->input->post('no_hp'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')

		);
		$id=$this->input->post('id');
		$this->User_model->edit_data($id,$data);
		redirect(site_url('Profil_user'));
	}
}
?>