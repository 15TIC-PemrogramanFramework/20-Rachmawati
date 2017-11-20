<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Product extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->helper(array('form','url'));
	}
		 //untuk pengecekan login
	

	function index(){
		//print_r($this->mahasiswa_model->ambil_data());
		$data['product']=$this->Product_model->ambil_data();
		$this->load->view('Admin/product/productlist_admin',$data);
	}
	//===========================================================================
	function tambah(){
		$data=array(
			'action'=>site_url('product/tambah_aksi'),
			'nama_barang'=>set_value('nama_barang'),
			'harga'=>set_value('harga'),
			'deskripsi'=>set_value('deskripsi'),
			'stok'=>set_value('stok'),
		//'gambar'=>set_value('gambar'),
			'id_barang'=>set_value('id_barang'),
			'button' => 'Tambah'
		);

		$this->load->view('Admin/product/productform_admin', $data);
	}

	function tambah_aksi(){

		$this->load->library('upload');
		$nmfile ="".time();
		$config['upload_path'] = './product/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '3072';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);
		if($_FILES['gambar']['name']){
			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data();
				$data=array(
					'gambar' => $gambar['file_name'],
					'nama_barang'=>$this->input->post('nama_barang'),
					'harga'=>$this->input->post('harga'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'stok'=>$this->input->post('stok'),
		//'gambar'=>$this->input->post('gambar'),
					
				); 
				$this->Product_model->tambah_data($data);
				redirect(site_url('Product'));
			}else{
				echo 'error';
			}
		}
	}
	//=========================================================

	function delete($id_barang){
		$this->Product_model->hapus_data($id_barang);
		redirect(site_url('Product'));
	}

	//======================================================
	function edit($id_barang){
		$barang=$this->Product_model->ambil_data_id($id_barang);
		$data=array(

			'id_barang'=>set_value('id_barang',$barang[0]->id_barang),
			'nama_barang'=>set_value('nama_barang',$barang[0]->nama_barang),
			'harga'=>set_value('harga',$barang[0]->harga),
			'deskripsi'=>set_value('deskripsi',$barang[0]->deskripsi),
			'stok'=>set_value('stok',$barang[0]->stok),
		//'gambar'=>set_value('gambar',$barang[0]->gambar),
			'action'=>site_url('Product/edit_aksi'),
			'button' => 'edit'
		);
		$this->load->view('Admin/product/productform_admin', $data);
	}

	function edit_aksi(){

		$this->load->library('upload');
		$nmfile ="".time();
		$config['upload_path'] = './product/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '3072';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);
		if($_FILES['gambar']['name']){
			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data();
				$data=array(
					'gambar' => $gambar['file_name'],
					'nama_barang'=>$this->input->post('nama_barang'),
					'harga'=>$this->input->post('harga'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'stok'=>$this->input->post('stok')
		//'gambar'=>$this->input->post('gambar')
					
				); 
				$id_barang=$this->input->post('id_barang');
				$this->Product_model->edit_data($id_barang,$data);
				redirect(site_url('Product'));

			}else{
				echo "error";
			}
		}
	}

}
?>