<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller{

	function __construct()
	{

		parent::__construct();
		$this->load->model('User_model');

		$ambil = $this->session->userdata('username');
		

	}

	function index(){
		$ambil1 = $this->session->userdata('username');
		$dataAkun = $this->User_model->ambil_dataAkun_yangsudahlogin($ambil1);

		$id_barang =  $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_barang = $this->input->post('jumlah_barang_dibeli');
		$harga = $this->input->post('harga');

		$total = $jumlah_barang * $harga;

		$datapembeli = array(
			'id'=> $dataAkun[0]->id,
			'id_barang'=> $id_barang,
			'nama_barang'=> $nama_barang,
			'jumlah_barang'=> $jumlah_barang,
			'total' => $total,
			'nama'=> $dataAkun[0]->nama,
			'alamat'=> $dataAkun[0]->alamat,
			'no_hp'=> $dataAkun[0]->no_hp,
			'ket'=> "belum dikirim"
			);
		$this->User_model->beli($datapembeli);
		redirect(site_url('Halaman_order'));
		}
}
?>
