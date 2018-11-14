<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}

	public function index()
	{
		//$data['cari'] = $this->product_model->cariOrang();
		
		$data['feature'] = $this->db->query('SELECT * FROM artikel WHERE id = ? LIMIT 1', 4)->row_array();
		$data['feature2'] = $this->db->query('SELECT * FROM artikel WHERE id = ? LIMIT 1', 5)->row_array();
		$data['feature3'] = $this->db->query('SELECT * FROM artikel WHERE id = ? LIMIT 1', 6)->row_array();
		$data['feature4'] = $this->db->query('SELECT * FROM artikel WHERE id = ? LIMIT 1', 7)->row_array();

		$data['barang'] = $this->db->get('barang')->result_array();
		$this->load->view('awal/tampilan',$data);
	}
	public function detail($id)
	{
		$this->load->model('product_model');
		$data['a'] = $this->product_model->get_detail($id);;
		$this->load->view('awal/detail',$data);
	}
	public function buy()
	{
		$this->load->view('awal/buy');
	}
	public function about()
	{
		$this->load->view('awal/about');
	}
	public function news()
	{
		$data['barang'] = $this->db->get('barang')->result_array();
		$this->load->view('awal/news',$data);
	}
	public function spesial()
	{
		$data['sp'] = $this->db->query('SELECT * FROM barang WHERE id = ? LIMIT 1', 30)->row_array();
		$data['sp1'] = $this->db->query('SELECT * FROM barang WHERE id = ? LIMIT 1', 28)->row_array();
		$data['sp2'] = $this->db->query('SELECT * FROM barang WHERE id = ? LIMIT 1', 32)->row_array();
		//$data['barang'] = $this->db->get('barang')->result_array();
		$this->load->view('awal/spesial',$data);
	}
	public function hasil()
	{
		if (isset($_POST['q'])) {
		$data2['ringkasan'] = $this->input->post('cari');
		$this->session->set_userdata('sess_ringkasan', $data2['ringkasan']);
	}else{
		$data2['ringkasan'] =$this->session->userdata('sess_ringkasan');
	}
	$this->db->like('nama',$data2['ringkasan']);


	$data2['barang'] = $this->product_model->ambildata($data2['ringkasan']);
	//$this->load->vers($data2);
	$this->load->view('awal/hasil',$data2);

}
}