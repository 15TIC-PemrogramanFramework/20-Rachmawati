<?php 
class User_model extends CI_Model
{	
	public $table_user = 'registrasi';
	public $id	='id';
	public $nama = 'nama';
	public $alamat = 'alamat';
	public $no_hp = 'no_hp';
	public $username = 'username';
	public $password = 'password';
	//table barang
	public $table_barang='barang';
	public $id_barang = 'id_barang';
	public $nama_barang = 'nama_barang';
	public $harga = 'harga';
	public $deskripsi = 'deskripsi';
	public $stok = 'stok';
	public $gambar = 'gambar';
	public $order = 'ASCE';
	//table pembelian
	public $table_beli ='pembelian';
	public $id_pembelian = 'id_pembelian';
	public $total = 'total';
	public $jumlah_barang = 'jumlah_barang';
	public $order_des ='DESC';
	//table pembayaran
	public $table_bayar ='pembayaran';
	public $id_pembayaran = 'id_pembayaran';
	public $jenis	='jenis';
	public $order_bayar ='DESC';
	//table saran
	public $table_saran = 'saran';
	public $id_saran ='id_saran';
	public $order_saran = "DESC";
	function __construct()
	{
		parent::__construct();		
	}
//PELANGGAN----------------
//------------------- TAMBAH AKUN PELANGGAN-------------------------------------
	//Tambah Akun Pelanggan
	function tambahAkun($datauser){
		$this->db->insert($this->table_user, $datauser);
	}
//---------------------- EDIT AKUN PELANGGAN -------------------------------
	//Edit Data Akun Pelanggan
	function edit_data($id, $datauser){
		$this->db->where($this->id, $id);
		$this->db->update($this->table_user, $datauser);
	}
	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->table_user)->result();
	}
//------------------- TAMPIL AKUN PELANGGAN -----------------------------------------
	//menampilkan Akun Pelanggan yang sudah login
	function ambil_dataAkun_yangsudahlogin($username){
		$this->db->where($this->username, $username);
		return $this->db->get($this->table_user)->result();
	}
//-----------------Cek Login Pelanggan -------------
	function cek_login_pelanggan($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
	//-------------ambil data----------
//BARANG
	//tampilkan semua barang
	function tampil_data_barang(){
		$this->db->order_by($this->id_barang, $this->order);
		return $this->db->get($this->table_barang)->result();
	}
	//tampilkan barang per id
	function tampil_barang_per_id($id_barang){
			$this->db->where($this->id_barang,$id_barang);
			return $this->db->get($this->table_barang)->result();
	}
	function order_id($id_order){
			$this->db->where($this->id_order,$id_order);
			return $this->db->get($this->table_order)->result();
	}
	function search($nama_barang){
		$this->db->like('nama_barang',$nama_barang);
		$query = $this->db->get($this->table_barang);
		return $query->result();
	}
	function beli($datapembeli){
		return $this->db->insert($this->table_beli,$datapembeli);
	}
	function ambil_beli(){
		return $this->db->get($this->table_beli)->result();
	}
	function selectpembelian($id){
		$this->db->distinct();
		$this->db->select('r.id, b.id_barang, b.nama_barang, p.jumlah_barang, p.total, r.nama, r.alamat, r.no_hp , p.ket');
		$this->db->from('pembelian p');
		$this->db->join('barang b', 'b.id_barang = p.id_barang');
		$this->db->join('registrasi r','r.id = p.id');
		$this->db->where('p.id',$id);
		$this->db->order_by('p.id_pembelian', $this->order_des);

		return $this->db->get($this->table_beli)->result();
	}

	function bayar($datapembayaran){
		return $this->db->insert($this->table_bayar,$datapembayaran);
	}
	function ambil_bayar(){
		return $this->db->get($this->table_bayar)->result();
	}

	function selectpembayaran($id_pembayaran){
		$this->db->distinct();
		$this->db->select('r.id, r.nama, r.alamat, r.no_hp, pe.jenis');
		$this->db->from('pembayaran pe');
		$this->db->join('registrasi r','r.id = pe.id');
		$this->db->where('pe.id_pembayaran',$id_pembayaran);
		$this->db->order_by('pe.id_pembayaran', $this->order_bayar);

		return $this->db->get($this->table_bayar)->result();
	}

	function tampil_saran(){
		$this->db->order_by($this->id_saran, $this->order_saran);
		return $this->db->get($this->table_saran)-> result();
	}

	function insert_saran(){
		$this->db->insert($this->table_saran, $data);

	}

	function hapus_saran(){
		$this->db->where($this->id_saran, $id_saran);
		$this->db->delete($this->table_saran);
	}

	
}

?>

