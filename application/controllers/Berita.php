<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$data['berita'] = $this->my_lib->get_data('berita');
		$this->load->view('berita', $data);
		$this->load->view('include/footer');
	}

}