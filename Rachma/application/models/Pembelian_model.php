<?php 
/**
* 
*/
class Pembelian_model extends CI_Model
{
	
	public $table_beli='pembelian';
	public $id_pembelian = 'id_pembelian';
	public $nama_barang = 'nama_barang';
	public $jumlah_barang = 'jumlas_barang';
	public $total = 'total';
	public $nama = 'nama';
	public $alamat = 'alamat';
	public $no_hp = 'no_hp';
	public $ket = 'ket';
	public $order = 'DESC';


	
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){

		$this->db->order_by($this->id_pembelian, $this->order);
		return $this->db->get($this->table_beli)->result();
	}


	//untuk insert data
	function tambah_data($data){
		return $this->db->insert($this->table_beli,$data);

	}
	//untuk delete data
	function hapus_data($id_pembelian){
		$this->db->where($this->id_pembelian, $id_pembelian);
		$this->db->delete($this->table_beli);

	}

	function edit_data($id_pembelian,$data){
		$this->db->where($this->id_pembelian, $id_pembelian);
		$this->db->update($this->table_beli,$data);

	}
	//untuk mengambil perid seluruh mahasiswa
	function ambil_data_id($id_pembelian){

		$this->db->where($this->id_pembelian,$id_pembelian);
		return $this->db->get($this->table_bei)->result();
	}

	function updateKet($id_pembelian, $ket){
		$this->db->query("UPDATE `pembelian` SET `ket` = '$ket' WHERE id_pembelian = $id_pembelian");
	}



}
 ?>