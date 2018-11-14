<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
				$this->load->model('Auth');
				$this->load->model('config_model');
        $this->load->model('Admin_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function Auth()
	 {
    $data = array('username'=> $this->input->post('username', TRUE),
          'password' => md5($this->input->post('password',TRUE))
        );
      $hasil = $this->Auth->cek_user($data);
      if ($hasil->num_rows() == 1) {
        foreach ($hasil->result() as $sess) {
          $log_data['logged_in'] = 'in';
          $log_data['id']        = $sess->id;
          $log_data['nama']      = $sess->nama;
          //$log_data['gambar']    = $sess->gambar;
          $this->session->set_userdata($log_data);
      }

      redirect('Admin');
    }
    else {
      echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
    }
  }

  public function logout()
  {
      session_destroy();
      redirect('Login');
  }
}
