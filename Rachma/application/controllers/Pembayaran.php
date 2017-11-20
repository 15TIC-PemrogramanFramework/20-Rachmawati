<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pembayaran extends CI_Controller{

	function __construct()
	{

		parent::__construct();
		$this->load->model('User_model');

		$ambil = $this->session->userdata('username');
		

	}

	function index(){
		$ambil1 = $this->session->userdata('username');
		$dataAkun = $this->User_model->ambil_dataAkun_yangsudahlogin($ambil1);
	
		$jenis = $this->input->post('pembayaran');
		

		$datapembayaran = array(
			'id'=>$dataAkun[0]->id,
			'nama'=> $dataAkun[0]->nama,
			'alamat'=> $dataAkun[0]->alamat,
			'no_hp'=> $dataAkun[0]->no_hp,
			'jenis'=> $jenis
			
			);
		$this->User_model->bayar($datapembayaran);
		redirect(site_url('Halaman_pembayaran'));
		}
}
?>
