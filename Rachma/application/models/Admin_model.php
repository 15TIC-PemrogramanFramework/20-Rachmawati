<?php 
/**
* 
*/
class Admin_model extends CI_Model
{
	public $table_admin	='admin';
	public $id 			='id_admin';
	public $username_admin = 'username_admin';
	public $password_admin = 'password_admin';
	public $order 		='DESC';

	
	function __construct()
	{
		parent::__construct();
	}

	//buat Login
	function cek_login_Admin($table_admin, $data_login_admin){
		return $this->db->get_where($table_admin, $data_login_admin);
	}

}
 ?>