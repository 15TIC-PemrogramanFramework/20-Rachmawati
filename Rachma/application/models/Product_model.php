<?php 
/**
* 
*/
class Product_model extends CI_Model
{
	
	public $table_barang='barang';
	public $id_barang = 'id_barang';
	public $nama_barang = 'nama_barang';
	public $harga = 'harga';
	public $deskripsi = 'deskripsi';
	public $stok = 'stok';
	public $gambar = 'gambar';
	public $order = 'DESC';


	
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){

		$this->db->order_by($this->id_barang, $this->order);
		return $this->db->get($this->table_barang)->result();
	}


	//untuk insert data
	function tambah_data($data){
		return $this->db->insert($this->table_barang,$data);

	}
	//untuk delete data
	function hapus_data($id_barang){
		$this->db->where($this->id_barang, $id_barang);
		$this->db->delete($this->table_barang);

	}

	function edit_data($id_barang,$data){
		$this->db->where($this->id_barang, $id_barang);
		$this->db->update($this->table_barang,$data);

	}
	//untuk mengambil perid seluruh mahasiswa
	function ambil_data_id($id_barang){

		$this->db->where($this->id_barang,$id_barang);
		return $this->db->get($this->table_barang)->result();
	}



}
 ?>