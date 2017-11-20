<?php 
/**
* 
*/
class Pembayaran_model extends CI_Model
{
	
	public $table_bayar='pembayaran';
	public $id_pembayaran = 'id_pembayaran';
	public $nama = 'nama';
	public $alamat = 'alamat';
	public $no_hp = 'no_hp';
	public $jenis = 'jenis';
	public $order = 'DESC';


	
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){

		$this->db->order_by($this->id_pembayaran, $this->order);
		return $this->db->get($this->table_bayar)->result();
	}


	//untuk insert data
	function tambah_data($data){
		return $this->db->insert($this->table_bayar,$data);

	}
	//untuk delete data
	function hapus_data($id_pembayaran){
		$this->db->where($this->id_pembayaran, $id_pembayaran);
		$this->db->delete($this->table_bayar);

	}

	function edit_data($id_pembayaran,$data){
		$this->db->where($this->id_pembayaran, $id_pembayaran);
		$this->db->update($this->table_bayar,$data);

	}
	//untuk mengambil perid seluruh mahasiswa
	function ambil_data_id($id_pembayaran){

		$this->db->where($this->id_pembayaran,$id_pembayaran);
		return $this->db->get($this->table_bayar)->result();
	}



}
 ?>