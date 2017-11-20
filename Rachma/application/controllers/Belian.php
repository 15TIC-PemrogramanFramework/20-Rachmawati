<?php 
/**
* 
*/
class Belian extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Pembelian_model');
}
		 //untuk pengecekan login
	

	function index(){
		//print_r($this->mahasiswa_model->ambil_data());
		$data['pembelian']=$this->Pembelian_model->ambil_data();
		$this->load->view('Admin/pembelian/pembelianlist_admin',$data);
	}
	//===========================================================================
	 function tambah(){
		$data=array(
		'action'=>site_url('pembelian/tambah_aksi'),
		'nama_barang'=>set_value('nama_barang'),
		'jumlah_barang'=>set_value('jumlah_barang'),
		'total'=>set_value('total'),
		'nama'=>set_value('nama'),
		'alamat'=>set_value('alamat'),
		'no_hp'=>set_value('no_hp'),
		'ket'=>set_value('ket'),
		'id_pembelian'=>set_value('id_pembelian'),
		'button' => 'Tambah'
		);

		$this->load->view('Admin/pembelian/pembelian_form', $data);
	}

	function tambah_aksi(){
		$data=array(
		'nama_barang'=>$this->input->post('nama_barang'),
		'jumlah_barang'=>$this->input->post('jumlah_barang'),
		'harga'=>$this->input->post('harga'),
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'no_hp'=>$this->input->post('no_hp'),
		'ket'=>set_value('ket'),
		); 
		$this->Pembelian_model->tambah_data($data);
		redirect(site_url('Belian'));
	}
	//=========================================================

	 function delete($id_pembelian){
		$this->Pembelian_model->hapus_data($id_pembelian);
		redirect(site_url('Belian'));
	}

	//======================================================

	 function updateKet($id_pembelian){
		$this->Pembelian_model->updateKet($id_pembelian,"sudah terkirim");
		redirect(site_url('Belian'));
	}
}
?>