<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Member_model');
	}
		 //untuk pengecekan login
	
	function index(){
		//print_r($this->mahasiswa_model->ambil_data());
		$data['member']=$this->Member_model->ambil_data();
		$this->load->view('Admin/member/memberlist_admin',$data);
	}
	//===========================================================================
	function tambah(){
		$data=array(
			'action'=>site_url('member/tambah_aksi'),
			'nama'=>set_value('nama'),
			'alamat'=>set_value('alamat'),
			'no_hp'=>set_value('no_hp'),
			'username'=>set_value('username'),
			'password'=>set_value('password'),
			'id'=>set_value('id'),
			'button' => 'Tambah'
		);

		$this->load->view('Admin/member/memberform_admin', $data);
	}

	function tambah_aksi(){
		$data=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'no_hp'=>$this->input->post('no_hp'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('passwrod'),
			
		); 
		$this->Member_model->tambah_data($data);
		redirect(site_url('Member'));
	}
	//=========================================================

	function delete($id){
		$this->Member_model->hapus_data($id);
		redirect(site_url('Member'));
	}

	//======================================================
	function edit($id){
		$member=$this->Member_model->ambil_data_id($id);
		$data=array(

			'id'=>set_value('id',$member[0]->id),
			'nama'=>set_value('nama',$member[0]->nama),
			'alamat'=>set_value('alamat',$member[0]->alamat),
			'no_hp'=>set_value('no_hp',$member[0]->no_hp),
			'username'=>set_value('username',$member[0]->username),
			'password'=>set_value('password',$member[0]->password),
			'action'=>site_url('Member/edit_aksi'),
			'button' => 'edit'
		);
		$this->load->view('Admin/member/memberform_admin', $data);
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
		$this->Member_model->edit_data($id,$data);
		redirect(site_url('Member'));

	}



}
?>