<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	// public function login($username = NULL, $password = NULL)
	// {
	// 	$query = $this->db->get_where('user', array('username' => $username, 'password'=>md5($password)));
	// 	return $query->row_array();
	// }
	// public function is_exist($username = NULL, $id = 0)
	// {
	// 	if($id == NULL)
	// 	{
	// 		$query = $this->db->get_where('user', array('username' => $username));
	// 	}else{
	// 		$query = $this->db->get_where('user', array('username' => $username, 'id'=>$id));
	// 	}
	// 	return $query->row_array();
	// }
	// public function check($type= '', $value='')
	// {
	// 	$output = '';
	// 	if(!empty($type) && !empty($value))
	// 	{
	// 		$output = $this->db->get_where('user', array('nama' => $value));
	// 		$output->row_array();
	// 	}
	// 	return $output;
	// }
	 public function cek_user($data) 
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }


}