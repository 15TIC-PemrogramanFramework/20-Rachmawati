<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Bayaran extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Pembayaran_model');
	}
		 //untuk pengecekan login
	

	function index(){
		//print_r($this->mahasiswa_model->ambil_data());
		$data['pembayaran']=$this->Pembayaran_model->ambil_data();
		$this->load->view('Admin/pembayaran/pembayaranlist_admin',$data);
	}
	//===========================================================================
	
	//=========================================================

	function delete($id_pembayaran){
		$this->Pembayaran_model->hapus_data($id_pembayaran);
		redirect(site_url('Bayaran'));
	}

	//======================================================
}
?>