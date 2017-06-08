<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('berita');
		$this->load->view('include/footer');
	}

}