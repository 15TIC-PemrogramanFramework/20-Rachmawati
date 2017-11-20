<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Halaman_pembayaran extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$username = $this->session->userdata('username');
		$dataAkun = $this->User_model->ambil_dataAkun_yangsudahlogin($username);
		$data_user['data_dibayar']= $this->User_model->selectpembayaran($dataAkun[0]->id);	
		$this->load->view('Pembayaran', $data_user);
	}
}
	?>