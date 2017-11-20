	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	
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

		
		$this->load->view('home');
	}
	/*public function order(){
		$this->load->view('order');
	}*/
	/*public function pembayaran(){
		$this->load->view('pembayaran');
	}*/
	/*public function selesai(){
		$this->load->view('selesai');
	}*/
	
	function search_keyword(){
		$nama_barang = $this->input->post('nama_barang');
		$data['result'] = $this->User_model->search($nama_barang);
		$this->load->view('pencarian',$data);
	}
	
	/*public function Tampilan_batubata(){
		$this->load->view('Tampilan_batubata');
	}
		public function Tampilan_kerikil(){
		$this->load->view('Tampilan_kerikil');
	}
		public function Tampilan_pasir(){
		$this->load->view('Tampilan_pasir');
	}
		public function Tampilan_catcatylac(){
		$this->load->view('Tampilan_catcatylac');
	}
	public function Tampilan_catdulux(){
		$this->load->view('Tampilan_catdulux');
	}
		public function Tampilan_kuascat(){
		$this->load->view('Tampilan_kuascat');
	}
		public function Tampilan_kuasdinding(){
		$this->load->view('Tampilan_kuasdinding');
	}
		public function Tampilan_lempipa(){
		$this->load->view('Tampilan_lempipa');
	}
		public function Tampilan_lemsetan(){
		$this->load->view('Tampilan_lemsetan');
	}
		public function Tampilan_lemalteco(){
		$this->load->view('Tampilan_lemalteco');
	}
		public function Tampilan_paku(){
		$this->load->view('Tampilan_paku');
	}
		public function Tampilan_pakupayung(){
		$this->load->view('Tampilan_pakupayung');
	}
		public function Tampilan_pakutembok(){
		$this->load->view('Tampilan_pakutembok');
	}
		public function Tampilan_pipa(){
		$this->load->view('Tampilan_pipa');
	}
		public function Tampilan_sambunganpipa(){
		$this->load->view('Tampilan_sambunganpipa');
	}
		public function Tampilan_semenpadang(){
		$this->load->view('Tampilan_semenpadang');
	}
	public function Tampilan_triplek(){
		$this->load->view('Tampilan_triplek');
	}*/



	
}

