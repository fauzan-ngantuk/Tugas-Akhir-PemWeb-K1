<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('jumbotron');
		$this->load->view('dataoverview');
		$data['berita'] = $this->my_lib->loadndata(3, 'berita');
		$this->load->view('segmenberita', $data);
		$this->load->view('pertanyaan');
		$this->load->view('include/footer');
	}

}
