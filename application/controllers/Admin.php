<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('admin_model');
   		$this->load->model('data_model');
   		$this->load->model('config_model');
   		$this->load->model('user_model');
        $this->load->library('ECRUD/ecrud');
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('product_model');
		if ($this->session->userdata('nama')==""){
			redirect('Login');
		}
	}

	public function index(){
		$this->load->view('product/admin');
	}
	public function barang(){
		$data['angkringan'] = $this->product_model->get_barang();
		$this->load->view('product/tampil_barang', $data);
	}
	public function tambah_cat(){
		//if (!empty($this->input->post())) 
			//$this->product_model->tambah();

			$data['kategori'] = $this->product_model->get_cat();
			$this->load->view('product/tambah_cat', $data);
	}
	public function category(){
		$data['category'] = $this->product_model->get_cat();
		$this->load->view('product/category', $data);
	}
	public function tambah(){
		$data['category'] = $this->product_model->get_cat();
		$this->load->view('product/tambah', $data);
	}
	public function product_tambah(){
		
			$this->load->view('product/tambah_barang');
	}
	public function tambah_user(){
		//if (!empty($this->input->post())) 
			//$this->product_model->tambah();

			$data['user'] = $this->product_model->get_user();
			$this->load->view('product/tambah_user', $data);
	}
	public function user(){
		$data['user'] = $this->product_model->get_user();
		$this->load->view('product/tampil_user', $data);
	}
	public function tambah_artikel(){
		//if (!empty($this->input->post())) 
			//$this->product_model->tambah();

			$data['artikel'] = $this->product_model->get_cat();
			$this->load->view('product/tambah_artikel', $data);
	}
	public function artikel(){
		$data['artikel'] = $this->product_model->get_cat();
		$this->load->view('product/tampil_artikel', $data);
	}				
}