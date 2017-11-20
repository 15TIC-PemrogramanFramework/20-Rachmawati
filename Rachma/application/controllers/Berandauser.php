<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Berandauser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){
		$data['data_barang']=$this->User_model->tampil_data_barang();
		$this->load->view('beranda',$data);
	
		//$this->load->view('beranda');
	}
	public function Product(){
		$data['data_barang']=$this->User_model->tampil_data_barang();
		$this->load->view('Product',$data);
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function Keranjang(){
		$this->load->view('Keranjang');
	}
	//database detailbarang
	public function DetailBarang($id_barang){
		$DBarang = $this->User_model->tampil_barang_per_id($id_barang);
		$databarang = array(
			'id_barang' 		=> set_value('id_barang', $DBarang[0]->id_barang),
			'nama_barang' 		=> set_value('nama_barang', $DBarang[0]->nama_barang),
			'harga' 			=> set_value('harga', $DBarang[0]->harga),
			'deskripsi' 	    => set_value('deskripsi', $DBarang[0]->deskripsi),
			'stok' 		        => set_value('stok', $DBarang[0]->stok),
			'gambar' 			=> set_value('gambar', $DBarang[0]->gambar)
		);
		$this->load->view('Tampilan_barang',$databarang);
		
	}

	

}
?> 