<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lib
{

  function  upload()
  {
      $config['upload_path']          = './asset/img/';
    	$config['allowed_types']        = 'gif|jpg|png|jpng';
    	// $config['max_size']             = 1000;
    	// $config['max_width']            = 1024;
    	// $config['max_height']           = 768;

    	$this->load->library('upload', $config);

    	if ( ! $this->upload->do_upload('file')){
    		// $error =  $this->upload->display_errors();
    		return FALSE;
    	}else{
    		$data =  $this->upload->data();
    		return $data['file_name'];
    	}
}


}
