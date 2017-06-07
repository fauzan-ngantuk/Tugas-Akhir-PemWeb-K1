<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$data['sis'] = $this->my_lib->get_data('siswa');
		$this->load->view('page/siswa',$data);
		$this->load->view('include/footer');
	}

	
}
