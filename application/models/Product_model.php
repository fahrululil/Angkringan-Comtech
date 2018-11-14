<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	// public function tambah()
	// {
	// 	$post = array();

	// 	$post['nama']		 =$this->input->post('nama');
	// 	$post['harga'] =$this->input->post('harga');
	// 	$post['stock']		 =$this->input->post('stock');
	// 	$post['id_kategori']	 =$this->input->post('id_kategori');
		
	// 		//$this->db->insert('barang', $post);
	// }
	
	public function get_barang()
	{
		$data = $this->db->get('barang')->result_array();
	}
	public function get_detail($id)
	{
		$data = $this->db->get_where('barang', array('id' => $id));
		return $data->row_array();
	}
	public function get_art($c)
	{
		$data = $this->db->get_where('artikel', array('kategori' => $c));
		return $data->row_array();
	}
	public function get_cat()
	{
		$data = $this->db->get('kategori')->result_array();
		return $data;
	}
	public function get_user()
	{
		$data = $this->db->get('user')->result_array();
		return $data;
	}
	public function ambildata($barang)
	{
		$this->db->select('*');
		$this->db->from('barang');
		if (!empty($ringkasan)) {
			$this->db->like('nama',$ringkasan);
		}
		$this->db->order_by('id','asc');
		$getData = $this->db->get('');

		if ($getData->num_rows()>0)
			return $getData->result_array();
		else
			return null;
	}
}