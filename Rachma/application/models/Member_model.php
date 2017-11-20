<?php 
/**
* 
*/
class Member_model extends CI_Model
{
	
	public $table_user = 'Registrasi';
	public $id	='id';
	public $nama = 'nama';
	public $alamat = 'alamat';
	public $no_hp = 'no_hp';
	public $username = 'username';
	public $password = 'password';
	public $order 		='DESC';


	
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){

		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table_user)->result();
	}


	//untuk insert data
	function tambah_data($data){
		return $this->db->insert($this->table_user,$data);

	}
	//untuk delete data
	function hapus_data($id){
		$this->db->where($this->id, $id);
		$this->db->delete($this->table_user);

	}

	function edit_data($id,$data){
		$this->db->where($this->id, $id);
		$this->db->update($this->table_user,$data);

	}
	//untuk mengambil perid seluruh mahasiswa
	function ambil_data_id($id){

		$this->db->where($this->id,$id);
		return $this->db->get($this->table_user)->result();
	}



}
 ?>